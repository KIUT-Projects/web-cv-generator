<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(is_user()){
            return redirect()->route('user.dashboard');
        }
        return redirect()->route('login');
    }

    public function login(){
        return view('session/login-session');
    }


}
