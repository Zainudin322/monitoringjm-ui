<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $notes = Note::where('user_id', Auth::user()->id)->paginate(10);

        return view('note.list', [
            'title' => 'Data Catatan',
            'notes' => $notes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('note.create', [
            'title' => 'Tambah Catatan',
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
        $request->validate(
            [
                'title' => 'required',
                'description' => 'required|max:255',
            ],
            [
                'description.required' => 'Gagal menambahkan deskripsi',
                'description.max' => 'Jumlah karakter yang anda gunakan melebihi batas!',
            ]
        );

        Note::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('note.index')->with('message', 'Berhasil menambahkan catatan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        return view('note.edit', [
            'title' => 'Edit Catatan',
            'note' => $note
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        $request->validate(
            [
                'title' => 'required',
                'description' => 'required|max:255',
            ],
            [
                'description.required' => 'Gagal menambahkan deskripsi',
                'description.max' => 'Jumlah karakter yang anda gunakan melebihi batas!',
            ]
        );

        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();


        return redirect()->route('note.index')->with('message', 'Berhasil mengubah catatan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('note.index')->with('message', 'Berhasil menghapus catatan!');
    }
}