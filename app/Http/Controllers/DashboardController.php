<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //dump(session()->all());
        //dump(auth()->user());
        return view('admin.dashboard');
    }
}
