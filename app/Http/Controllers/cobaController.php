<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\friends;

class CobaController extends Controller
{
    public function index()
    {
        return 'text berhasil';
    }
    public function urutan ($ke)
    {
        $friends = Friends::paginate(3);

        return view('friend',compact('friends'));
    }
    public function coba($ke)
    {
        return view('coba',['ke' => $ke]);
    }

    public function friends()
    {
         $friends = Friends::paginate(3);

        return view('friend',compact('friends'));
    }
     public function create()
    {
        return view('create');
    }
}