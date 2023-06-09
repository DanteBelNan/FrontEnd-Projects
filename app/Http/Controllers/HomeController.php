<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('home.index', compact('projects'));
    }

    public function login(Request $request){
        $user = $request->input('email');
        $password = $request->input('password');
        
        $adminUser = env('ADMIN_USER');
        $adminPassword = env('ADMIN_PASSWORD');
        if($user == $adminUser && $password == $adminPassword){
            $logged = true;
            return redirect()->route('home.index')->with([
                'navbar-admin' => 'Admin logeado correctamente',
                'logged' => $logged,
                'success' => 'Admin logeado correctamente',
            ]);
        }else{
            $logged = false;
            return redirect()->route('home.index')->with([
                'error' => 'Credenciales incorrectas',
                'logged' => $logged
            ]);
        }
    }

    public function adminPanel(Request $request){
        $logged = $request->input('logged');
        $projects = Project::all();
        if($logged){
            return view('home.adminPanel', compact('logged', 'projects'));
        }else{
            return redirect()->route('home.index')->with([
                'error' => 'Usted no inicio sesion como para entrar al panel de admin',
                'logged' => $logged
            ]);
        }
    }
}
