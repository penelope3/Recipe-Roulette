<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(){
    }

    public function index(){
        return view('login');
    }

    public function store(Request $request){
        auth()->attempt($request->only('email', 'password'), $request->remember);

        return redirect()->route('dashboard');
    }
}
