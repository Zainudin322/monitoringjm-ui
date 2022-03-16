<?php

namespace App\Http\Controllers;

use App\Group;
use App\Permissions;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $applications = Permissions::where('user_id', Auth::user()->id)->when(
            request()->q,
            function ($applications) {
                $id = request()->q;
                $applications = $applications->whereHas('application', function ($q) use ($id) {
                    $q->where('group_id', $id);
                });
            }
        )->when(
            request()->s,
            function ($applications) {
                $search = request()->s;
                $applications = $applications->whereHas('application', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                });
            }
        )->get();

        $groups = Group::paginate(10);

        return view('home', ['applications' => $applications, 'groups' => $groups]);
    }
}
