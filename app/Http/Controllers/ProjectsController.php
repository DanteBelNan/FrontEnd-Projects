<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
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
        //Declaring the variables of the request && creating project
        $project = new Project();
        $name = $request->input('name');
        $desc = $request->input('desc');
        $framework = $request->input('framework');
        if($request->hasFile('img')){
            $img = $request->file('img');
            $filename = $name . '.' . $img->getClientOriginalExtension();
            $path = resource_path('img/projects/' . $filename);
            $image = Image::make($img)->resize(500, 500); //composer require intervention/image need to be done
            $image->save($path);
            $project->img = '/img/projects/' . $filename;
        }
        $created_at = now(); //this need to has an extra  function that detects time

        //Creating the php file
        $filePath = resource_path('views/projects/' . $name . '.blade.php');
        $fileContent = "
        @extends('layouts.layouts')

        @section('content')
        @endsection";
        file_put_contents($filePath, $fileContent);

        //Creating de project in db
        $project->name = $name;
        $project->desc = $desc;
        $project->framework = $framework;
        $project->created_at = $created_at;
        $project->save();

        return redirect()->route('projects.show', $project->id);

    }
}
