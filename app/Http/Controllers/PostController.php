<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index');
    }

    public function show($slug)
    {
        return view('post.show', ['slug' => $slug]);
    }
}