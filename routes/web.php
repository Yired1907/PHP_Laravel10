<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Laravel 10 (also new)
// Route::get('/products', 'App\Http\Controllers\ProductsController@index');

//Laravel 10

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

//Posts endpoint
Route::get('/posts', [PostController::class, 'index']);
