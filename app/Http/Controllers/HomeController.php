<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function login(Request $request){
        $user = $request->input('email');
        $password = $request->input('password');
        
        
        return view('home.index');
    }
}
