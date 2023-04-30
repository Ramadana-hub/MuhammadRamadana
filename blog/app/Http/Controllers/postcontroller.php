<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class postcontroller extends Controller
{
    public function index()
    {
        return view('post', [
            "title" => "Post",
            "post" => post::all()
        ]);
    }
    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => post::find($slug)
        ]);
    }
}