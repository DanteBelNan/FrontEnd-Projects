<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function login(Request $request){
        $user = $request->input('email');
        $password = $request->input('password');
        
        $adminUser = env('ADMIN_USER');
        $adminPassword = env('ADMIN_PASSWORD');
        if($user == $adminUser && $password == $adminPassword){
            return redirect()->route('home.index')->with('success', 'Admin logeado correctamente');
        }else{
            return redirect()->route('home.index')->with('error', 'Nombre o usuario incorrecto');
        }
    }
}
