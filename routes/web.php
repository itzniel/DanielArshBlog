<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Auth::routes(['verify' => true]); //to verify email

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Article
Route::resource('articles', ArticleController::class);// controls or the routes of Articles


//Categories
Route::resource('categories', CategoryController::class);//// controls or the routes of categories
