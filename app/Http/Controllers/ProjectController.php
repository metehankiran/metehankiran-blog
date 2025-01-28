<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(6);
        return view('project.index', compact('projects'));
    }

    public function show($project)
    {
        $project = Project::where('slug', $project)->first();

        if(!$project){
            return redirect()->route('project.index');
        }
        
        return view('project.show', ['project' => $project]);
    }
}