<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
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
});

Route::group(["prefix" => "/publisher"], function (){
    Route::get('/all', [PublisherController::class, 'index']);
    Route::get('/detail/{publishers}', [PublisherController::class, 'show']);
});
