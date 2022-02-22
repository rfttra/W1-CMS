<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Practice 1
// Number 1
// Route::get('/', function () {
//     echo "Hi! Welcome to Laravel";
//     });

// //Number 2
// Route::get('/about', function () {
//     echo "NIM : 204172054 <br>";
//     echo "Name : Rabiatul Fitra Aulia <br>";
//     echo "Class : TI-2I";
//     });

// //Number 3
// Route::get('/article/{id}', function ($id) {
//     echo "This is Article Pages with ID : ".$id;
//     });


//Practice 2
//Number 1
// Route::get('/', [PageController::class, 'index']);

// //Number 2
// Route::get('/about', [PageController::class, 'about']);

// //Number 3
// Route::get('/articles/{id}', [PageController::class, 'articles']);

//Number 5
//Home
Route::get('/', [HomeController::class, 'index']);
//About
Route::get('/about', [AboutController::class, 'about']);
//Artcile
Route::get('/articles/{id}', [ArticleController::class, 'articles']);