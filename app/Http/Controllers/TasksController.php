<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function create(Project $project)
    {
    	return view('tasks.create')->with('project', $project);
    }

    public function store(Project $project)
    {
    	$project->tasks()->create([
    		'title' => request()->title,
    		'description' => request()->title
    	]);

    	return redirect('/projects/'.$project->id);
    }
    
    
}
