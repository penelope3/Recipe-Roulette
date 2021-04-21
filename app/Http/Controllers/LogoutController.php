<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//this class is for logging out the user
class LogoutController extends Controller
{
    public function store(){
        auth()->logout();

        return redirect()->route('home');
    }
}
