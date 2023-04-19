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

    public function settings(){
        return view('user.settings');
    }

    public function support(){
        return view('user.support');
    }

    public function plan(){
        return view('user.plan');
    }

    public function templates(){
        return view('user.template.index');
    }

    public function template(Request $request, $slug){
        return view('user.template.show');
    }

    public function downloads(){
        $downloads = (object)[];
        return view('user.downloads', compact('downloads'));
    }
}
