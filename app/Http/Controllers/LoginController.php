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
        if(!auth()->attempt($request->only('email', 'password'))){
            return redirect()->back()->with('status', 'Invalid Login Attempt');
        }
    return redirect()->route('dashboard');
        
    }
}
