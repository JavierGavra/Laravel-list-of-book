<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Book;
use App\Models\Buku;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function (){
    return view('about');
});

Route::group(["prefix" => "/book"], function (){
    Route::get('/all', [BookController::class, 'index']);
    Route::get('/detail/{buku}', [BookController::class, 'show']);
    Route::get('/create', [BookController::class, 'create']);
    Route::post('/add', [BookController::class, 'store']);
    Route::delete('/delete/{buku}', [BookController::class, 'destroy']);
    
    Route::get('/edit/{buku}', [BookController::class, 'edit']);
    Route::post('/update/{buku}', [BookController::class, 'update']);
});

Route::group(["prefix" => "/publisher"], function (){
    Route::get('/all', [PublisherController::class, 'index']);
    Route::get('/detail/{publishers}', [PublisherController::class, 'show']);
});

Route::group(["prefix" => "/login"], function (){
    Route::get('/', [LoginController::class, 'index']);
    Route::get('/register', [LoginController::class, 'register']);
    Route::post('/auth', [LoginController::class, 'auth']);
    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::group(["prefix"=>"/register"], function() {
    Route::get('/', [RegisterController::class, 'index']);
    Route::post('/create', [RegisterController::class,'create']);
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});