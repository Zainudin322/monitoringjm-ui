<?php

namespace App\Http\Controllers;

use App\Application;
use App\Permissions;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('permission.list', [
            'title' => 'Management Admin',
            'roles' => Role::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Permissions::where('user_id', $request->user_id)->delete();
        if($request->applications != null) {
            foreach($request->applications as $application_id){
                Permissions::create([
                    'user_id' => $request->user_id,
                    'application_id' => $application_id,
                ]);
        
            }
            
        }

        return redirect()->route('basic.index', $request->user_id)->with('message', 'Permission added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function show(Permissions $permissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function edit(Permissions $permissions, $id)
    {
        $user = User::find($id);
        return view('permission.edit', [
            'title' => "Permission User",
            'user' => $user,
            'user_id' => $user->id,
            'applications' => Application::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permissions $permissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permissions $permissions)
    {
        //
    }
}
