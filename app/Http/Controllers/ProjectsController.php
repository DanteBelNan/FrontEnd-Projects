<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    //
    public function show($id){
        $project = Project::findorFail($id);
        $name = $project->name;
        return view('projects.'.$name , [
            'project' => $project
        ]);
    }
    public function create(){
        //redirects to form
        return view('players.create');
    }
    public function store(Request $request){
        //Declaring the variables of the request
        $name = $request->input('name');
        $desc = $request->input('desc');
        $framework = $request->input('framework');
        $img = 0; // needs an extra function that stores the img in resources and saves the direction of the file in the variable
        $created_at = 0; //this need to has an extra  function that detects time

        //Creating the file
        $filePath = resource_path('views/projects/' . $name . '.blade.php');
        $fileContent = "
        @extends('layouts.layouts')

        @section('content')
        @endsection";
        file_put_contents($filePath, $fileContent);

        //Creating de project in db
        $project = new Project();
        $project->name = $name;
        $project->desc = $desc;
        $project->framework = $framework;
        $project->img = $img;
        $project->created_at = $created_at;

        $project->save();

        return redirect()->route('projects.show', $project->id);

    }
}
