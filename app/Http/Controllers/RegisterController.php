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
            'email' => 'required|max:255|unique:users',
            'password' => 'required|confirmed|max:255',
        ]);

        try{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => \Hash::make($request->password),
            ]);
        } catch(\Exception $e) {
            $user->delete();
            return redirect()->route('dashboard')->with(['error' => "We apologize, but there was an issue registering your account. " .
                "Please try again or try submitting a ticket on the <a href=" . route('dashboard') . " style='color: blue;'>support page!</a>"]);
        }

        return redirect()->route('dashboard');
    }
}
