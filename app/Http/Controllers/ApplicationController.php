<?php

namespace App\Http\Controllers;

use App\Application;
use App\Group;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       //search
        // $applications = Post::latest();

        // if(request('search')) {
        //     $applications->where ('', 'like', '%' . request('search') . '%');
        // }

        $applications = Application::when(
            request()->q,
            function ($applications) {
                $applications = $applications->where('group_id', request()->q);
            }
        )->paginate(10);
        
        return view('application.list', [
            'title' => 'Data Aplikasi',
            'groups' => Group::all(),
            'applications' => $applications
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('application.create', [
            'title' => 'Tambah Data Aplikasi',
            'groups' => Group::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'group_id' => 'required',
            'name' => 'required',
            'bpo' => 'required',
            'year' => 'required',
            'url' => 'required',
            'server' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        Application::create([
            'group_id' => $request->group_id,
            'name' => $request->name,
            'bpo' => $request->bpo,
            'year' => $request->year,
            'url' => $request->get('url'),
            'server' => $request->get('server'),
            'image' => $imageName,
        ]);

        return redirect()->route('application.index')->with('message', 'Berhasil menambahkan data aplikasi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        return view('application.show', [
            'title' => 'Menampilkan Data Aplikasi',
            'application' => $application,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        return view('application.edit', [
            'title' => 'Edit Data Aplikasi',
            'application' => $application,
            'groups' => Group::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        $request->validate([
            'group_id' => 'required',
            'name' => 'required',
            'bpo' => 'required',
            'year' => 'required',
            'url' => 'required',
            'server' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->image != null) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            if ($application->image != 'default.jpg') {
                if(file_exists( public_path()."images/" . $application->image )) {
                    unlink("images/" . $application->image);
                }
            }

            $application->image = $imageName;
        }
        
        $application->name = $request->name;
        $application->group_id = $request->group_id;
        $application->bpo = $request->bpo;
        $application->year = $request->year;
        $application->url = $request->get('url');
        $application->server = $request->get('server');
        $application->save();

        return redirect()->route('application.index')->with('message', 'Berhasil mengubah data aplikasi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        if ($application->image != 'default.jpg') {
            if(file_exists( public_path()."images/" . $application->image )) {
                unlink("images/" . $application->image);
            }
        }

        $application->delete();
        return redirect()->route('application.index')->with('message', 'Berhasil menghapus data aplikasi!');
    }
}
