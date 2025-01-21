<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('project.index');
    }

    public function show($slug)
    {
        return view('project.show', ['slug' => $slug]);
    }
}