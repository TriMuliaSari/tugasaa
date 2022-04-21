<?php

namespace App\Http\Controllers;

use App\Models\Friends;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {

        $friends = Friends::orderBy('id','desc')->paginate(3);

        return view('friends.index', compact('friends'));
    }
     public function create ()
    {
        return view ('friends.create');
    }
    public function store(Request $request)
    {
        // Validate the request...

        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_telp' => 'required|numeric',
            'alamat' => 'required',
        ]);
 
        $friends = new Friends;
 
        $friends->nama = $request->nama;
        $friends->no_telp = $request->no_telp;
        $friends->alamat = $request->alamat;
 
        $friends->save();

        return redirect('/');
    }

    public function show($id)
    {
        $friends = friends::where('id', $id)->first();
        return view('friends.show', ['friend'=> $friends]);
    }
}