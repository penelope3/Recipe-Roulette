<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|confirmed|max:255',
        ]);

        try{
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => \Hash::make($request->password),
                'verification_code' => sha1(time()),
                'is_verified' => 0,
            ]);
        } catch(\Exception $e) {
            return redirect()->back()->with(['error' => "We apologize, but there was an issue registering your account. " .
                "Please try again or try submitting a ticket on the <a href=" . route('dashboard') . " style='color: blue;'>support page!</a>"]);
        }

        return redirect()->route('dashboard');
    }
}
