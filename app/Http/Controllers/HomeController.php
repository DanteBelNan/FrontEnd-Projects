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
        $pass = $request->input('password');
        
        $adminUser = Config::get('admin_user');
        $adminPass = Config::get('admin_password');
        //return "Usuario: $adminUser, Contraseña: $adminPass";
        if($user == $adminUser && $pass == $adminPass){
            return redirect()->route('home.index')->with('success', 'Admin logeado correctamente');
        }else{
            return redirect()->route('home.index')->with('error', 'Nombre o usuario incorrecto');
        }
    }
}
