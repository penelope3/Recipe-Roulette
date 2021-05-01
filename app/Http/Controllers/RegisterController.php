<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

//this class is for registering a user
class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    //this function will create and store a new user in the db
    //on error it will redirect and throw an alert message
    public function store(Request $request){
        $request->validate([
            'username' => 'required|min:3|max:65',
            'email' => 'required|max:255|unique:users|email:rfc,dns',
            'password' => 'required|confirmed|min:8|max:65',
        ]);

        try{
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => \Hash::make($request->password),
            ]);
        } catch(\Exception $e) {
            $user->delete();
            return redirect()->back()->with(['error' => "We apologize, but there was an issue registering your account. "
                /**** COMMENTED OUT BECAUSE DASHBOARD ISSUES ***/
                //"Please try again or try submitting a ticket on the <a href=" . route('home') . " style='color: blue;'>support page!</a>
                ]);
        }

        return redirect()->route('login');
    }
}
