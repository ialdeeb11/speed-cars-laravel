<?php

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

Route::get('/', function () {

    return view('index', ['showAbout' => true],['title'=>'Speed-Cars']);
});

Route::get('/cars', function () {

    return view('cars', ['showAbout' => false],['title'=>'Cars']);
});


Route::get('/accent1995', function () {
    return view('details',['showAbout' => false],['title'=>'Accent 1995']);
});



Route::get('/test', function () {
    return view('test',['showAbout' => false],['title'=>'test']);
});
