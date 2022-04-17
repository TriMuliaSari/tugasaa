<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Models/Friends;

class CobaController extends Controller
{
    public function index()
    {
        return 'text berhasil';
    }
    public function urutan ($ke)
    {
        $friends = Friends::all();


        return view('friend',compact('friends'));
    }
    public function coba($ke)
    {
        return view('coba',['ke' => $ke]);
    }
}