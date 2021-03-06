<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RecipesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/collections', [CollectionsController::class, 'index'])->name('collections')->middleware(['auth']);
Route::get('/account', [AccountController::class, 'index'])->name('account')->middleware(['auth']);
Route::post('/account', [AccountController::class, 'store']);
Route::post('/account/chips', [AccountController::class, 'delete'])->name('accountChips');
Route::get('/recipe', [RecipeController::class, 'index'])->name('recipe');
Route::get('/recipes', [RecipesController::class, 'index'])->name('recipes');
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware(['guest']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware(['guest']);
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/post', [PostController::class, 'index'])->name('post')->middleware(['auth']);
Route::post('/post', [PostController::class, 'store']);
//Route::post('/post/ingredient', [AccountController::class, 'storeIngredient'])->name('ingredient');
//Route::post('/post/ingredient/chips', [AccountController::class, 'deleteIngredient'])->name('ingredientChips');
//Route::post('/post/instruction', [AccountController::class, 'storeInstruction'])->name('instruction');
//Route::post('/post/instruction/chips', [AccountController::class, 'deleteInstruction'])->name('instructionChips');
Route::get('/search', [SearchController::class, 'index'])->name('search');
?>
