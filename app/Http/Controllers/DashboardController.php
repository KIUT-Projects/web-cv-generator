<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(is_admin()){
            return view('admin.dashboard');
        }
        return view('user.dashboard');
    }

    public function downloads(){
        $downloads = (object)[];
        return view('user.downloads', compact('downloads'));
    }
}
