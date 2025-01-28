<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(6)->get();
        
        return view('index', compact('projects'));
    }

    public function about()
    {
        return view('about');
    }
}