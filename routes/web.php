<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [CarController::class,'index']);
Route::get('/cars', [CarController::class,'carsList']);
Route::get('/car-details/{id}', [CarController::class,'carDetails']);



// admin
Route::get('/admin', [AdminController::class,'index']);
Route::get('/admin/cars', [AdminController::class,'carsList']);
Route::get('/admin/create-car', [AdminController::class,'create']);
Route::post('/admin/add-car', [AdminController::class,'add']);
Route::delete('/admin/delete-car/{id}', [AdminController::class,'delete']);
Route::get('/admin/view-car/{id}', [AdminController::class,'view']);
Route::post('/admin/update-car/{id}', [AdminController::class,'update']);
