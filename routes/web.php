<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\dashboard\DashboardBookController;
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

Route::group(["prefix"=>"/dashboard"], function() {
    Route::get('/home', function () {
        return view('dashboard.index');
    })->middleware('auth');

    Route::group(["prefix"=>"/book"], function() {
        Route::get('/all', [DashboardBookController::class, 'index'])->middleware('auth');
        Route::get('/detail/{buku}', [DashboardBookController::class, 'show'])->middleware('auth');
        Route::get('/create', [DashboardBookController::class, 'create'])->middleware('auth');
        Route::post('/add', [DashboardBookController::class, 'store'])->middleware('auth');
        Route::delete('/delete/{buku}', [DashboardBookController::class, 'destroy'])->middleware('auth');
        Route::get('/edit/{buku}', [DashboardBookController::class, 'edit'])->middleware('auth');
        Route::post('/update/{buku}', [DashboardBookController::class, 'update'])->middleware('auth');
    });
});