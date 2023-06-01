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

}
