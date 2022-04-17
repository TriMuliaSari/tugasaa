<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\friends;

class CobaController extends Controller
{
 
    public function index()
    {
         $friends = Friends::paginate(3);

        return view('index',compact('friends'));
    }
     public function create()
    {
        return view('create');
    }
     public function store(Request, $request)
    {
        return view('create');
    }
    
}