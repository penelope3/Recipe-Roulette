<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Exception;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index(){
        return view('account');
    }

    //  Take user restriction and store in the db
    //  on error it will throw an alert message
    public function store(Request $request){
        // Validate the user entered a restriction
        $request->validate([
            'restriction' => 'required',
        ]);

        // Initialize variables of User, separate by ","
        //   Remove white space and make uppercase
        $user = Auth::user();
        $restriction = $request->restriction;
        $restriction = array_map('trim', explode(",", $restriction));

        // Check if User Restrictions has been initialized
        //   If so, check if restriction already exists and delete if true
        if(isset($user["dietary_restrictions"]) && !empty($user["dietary_restrictions"])) {
          $restrictions = $user["dietary_restrictions"];
          foreach($restrictions as $value) {
            foreach($restriction as $input) {
              if(mb_strtoupper($input) == mb_strtoupper($value)) {
                $index = array_search($input, $restriction);
                unset($restriction[$index]);
              }
            }
          }
          // Add all new restrictions to user dietary_restrictions
          if(isset($restriction) && !empty($restriction)) {
            $restrictions = array_merge($user["dietary_restrictions"], $restriction);
            $user["dietary_restrictions"] = $restrictions;
          }
        }
        else {
          $user["dietary_restrictions"] = $restriction;
        }

        $user->save();
        return redirect()->route('account');
    }


    //  Delete a restriction from a user
    public function delete(Request $request){
        $user = Auth::user();
        $temp = $request->all();
        $deletion = $temp["accountChip"];
        // Check if User Restrictions has been initialized
        //   If so, check if restriction already exists and delete if true
        if(isset($user["dietary_restrictions"]) && !empty($user["dietary_restrictions"])) {
          $restrictions = $user["dietary_restrictions"];
          $index = array_search($deletion, $restrictions);
          unset($restrictions[$index]);
        }
        $user["dietary_restrictions"] = $restrictions;


        $user->save();
        return redirect()->route('account');
    }
}
