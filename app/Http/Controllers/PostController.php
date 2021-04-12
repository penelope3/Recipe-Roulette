<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Exception;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        return view('post');
    }



    //  Take user all information from a user's post and stores in DB
    //  on error it will throw an alert message
    public function store(Request $request){
        // Validate the user entered a restriction
        $request->validate([
            'title' => 'required',
            'ingredient' => 'required',
            'instruction' => 'required',
            'image' => 'required',
        ]);
        $user = Auth::user();
        $title = $request->title;
        $ingredients = str_replace("\r", "", $request->ingredient);
        $ingredients = array_map('trim', explode("\n", $ingredients));
        $instructions = str_replace("\r","", $request->instruction);
        $instructions = array_map('trim', explode("\n", $instructions));
        $image = base64_encode(file_get_contents($request->image));

        // Store image and get path
        $path = $request->image->store('public/images');
        $path = substr($path, 7);
        $path = "storage/" . $path;

        // Create a new Recipe in the DTB and assign the relevant information
        try{
            $recipe = Recipe::create([
                'title' => $request->title,
                'ingredients' => $ingredients,
                'instructions' => $instructions,
                'image' => $path,
                'createdBy' => $user->_id,
                'likes' => 0,
            ]);
        } catch(\Exception $e) {
            dd($e);
            return redirect()->route('post')->with(['error' => "We apologize, but there was an issue posting your recipe."]);
        }

        return redirect()->route('recipe');
    }







/*
    //  Take user measure and instruction and store in the db
    //  on error it will throw an alert message
    public function storeIngredient(Request $request){
        // Validate the user entered an ingredient and measurement
        $request->validate([
            'ingredientMeasure' => 'required',
            'ingredient' => 'required',
        ]);

        $user = Auth::user();
        $temp = $request->all();
        $measure = $temp["ingredientMeasure"];
        $ingredient = $temp["ingredient"];
        $newIngredient = $measure . "_" . $ingredient;

        // Check if $user["tempPost"]["ingredients"] is initialized
        //  If so, add the new ingredient to the array
        if(isset($user["tempPost"]["ingredients"]) && !empty($user["tempPost"]["ingredients"])) {
          $ingredients = $user["tempPost"]["ingredients"];
          foreach($ingredients as $value) {
            if(mb_strtoupper($newIngredient) == mb_strtoupper($value)) {
              return redirect()->route('post');
            }
          }

          $ingredients = array_merge($user["tempPost"]["ingredients"], $newIngredient);
          $user["tempPost"]["ingredients"] = $ingredients;
        }
        else {
          $user["tempPost"]["ingredients"] = $newIngredient;
        }


        $user->save();
        return redirect()->route('post');
    }



    //  Take user instruction and store in the db
    //  on error it will throw an alert message
    public function storeInstruction(Request $request){
        // Validate the user entered a restriction
        $request->validate([
            'instruction' => 'required',
        ]);

        $user = Auth::user();
        $temp = $request->all();
        $instruction = $temp["instruction"];

        // Check if $user["tempPost"]["ingredients"] is initialized
        //  If so, add the new ingredient to the array
        if(isset($user["tempPost"]["instruction"]) && !empty($user["tempPost"]["instruction"])) {
          $instructions = $user["tempPost"]["instruction"];
          foreach($instructions as $value) {
            if(mb_strtoupper($instruction) == mb_strtoupper($value)) {
              return redirect()->route('post');
            }
          }

          $ingredients = array_merge($user["tempPost"]["ingredients"], $instruction);
          $user["tempPost"]["ingredients"] = $instructions;
        }
        else {
          $user["tempPost"]["ingredients"] = $instruction;
        }


        $user->save();
        return redirect()->route('post');
    }
*/







    /*************************
    ** NEEDS TO BE WORKED ON
    ** TEMPPOST->INGREDIENTS
    *************************/
    /*
    //  Delete an ingredient from a user post
    public function deleteIngredient(Request $request){
        $user = Auth::user();
        $temp = $request->all();
        $deletion = $temp["ingredientChips"];
        // Check if temporaryPost has been initialized
        //   If so, check if instruction exists and delete if true
        if(isset($user["tempPost"]) && !empty($user["tempPost"])) {
          $ingredients = $user["tempPost"];
          $index = array_search($deletion, $ingredients);
          unset($ingredients[$index]);
        }
        $user["tempPost"] = $ingredients;


        $user->save();
        return redirect()->route('post');
    }
  */





    /*************************
    ** NEEDS TO BE WORKED ON
    ** TEMPPOST->INSTRUCTIONS
    *************************/
  /*
    //  Delete an instruction from a user post
    public function deleteInstruction(Request $request){
        $user = Auth::user();
        $temp = $request->all();
        $deletion = $temp["instructionChips"];
        // Check if temporaryPost has been initialized
        //   If so, check if instruction exists and delete if true
        if(isset($user["tempPost"]) && !empty($user["tempPost"])) {
          $instructions = $user["tempPost"];
          $index = array_search($deletion, $instructions);
          unset($instructions[$index]);
        }
        $user["tempPost"] = $ingredients;


        $user->save();
        return redirect()->route('post');
    }
  */
}
