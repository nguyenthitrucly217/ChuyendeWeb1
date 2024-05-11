<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\PostController;



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

; 
Route::get("/",[HomeController::class,"index"]);
Route::get("san-pham",[ProductController::class,"index"]); 
Route::get("chi-tiet-san-pham/{slug}",[ProductController::class,"product_detail"]);
Route::get("lien-he",[ContactController::class,"index"]);
Route::get("bai-viet",[PostController::class,"index"]);
