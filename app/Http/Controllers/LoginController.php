<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//this class is for logging in the user
class LoginController extends Controller
{
    public function __construct(){
    }

    public function index(){
        return view('login');
    }

    //this function will attempt to login based on user inputs
    //failed login will redirect back with an error message
    public function store(Request $request){
        if(!auth()->attempt($request->only('email', 'password'))){
            return redirect()->back()->with('status', 'Invalid Login Attempt');
        }
    return redirect()->route('home');
        
    }
}
