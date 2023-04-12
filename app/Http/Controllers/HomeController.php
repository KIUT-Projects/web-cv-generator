<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->check()){
            return redirect()->route('dashboard');
        }
        return redirect()->route('login');
    }


}
