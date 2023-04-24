<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\brandsController;

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
Route::get('/brands', [CarController::class,'brandsList']);



// admin
Route::get('/admin', [AdminController::class,'index']);
Route::get('/admin/cars', [AdminController::class,'carsList']);
Route::get('/admin/create-car', [AdminController::class,'create']);
Route::post('/admin/add-car', [AdminController::class,'add']);
Route::delete('/admin/delete-car/{id}', [AdminController::class,'delete']);
Route::get('/admin/view-car/{id}', [AdminController::class,'view']);
Route::post('/admin/update-car/{id}', [AdminController::class,'update']);


// brands
Route::get('/admin/brands', [brandsController::class,'brandsList']);
Route::get('/admin/create-brand', [brandsController::class,'create']);
Route::post('/admin/add-brand', [brandsController::class,'add']);
Route::delete('/admin/delete-brand/{id}', [brandsController::class,'delete']);
Route::get('/admin/view-brand/{id}', [brandsController::class,'view']);
Route::post('/admin/update-brand/{id}', [brandsController::class,'update']);
Route::get('/brand-cars/{brandName}', [brandsController::class,'carsOfBrand']);

