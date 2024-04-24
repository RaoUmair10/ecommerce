<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;

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

Route::get('/',[ViewController::class,'index']);
Route::get('/about',[ViewController::class,'about']);
Route::get('/contact',[ViewController::class,'contact']);
Route::get('/shop',[ViewController::class,'shop']);
Route::get('/cart',[ViewController::class,'shoppingcart']);
Route::get('/checkout',[ViewController::class,'checkout']);
Route::get('/single/{id}',[ViewController::class,'single']);
Route::get('/register',[UserController::class,'register']);
Route::post('/register',[UserController::class,'save']);
Route::get('/login',[UserController::class,'login']);
Route::post('/login',[UserController::class,'loginin']);
Route::post('/addToCart',[CartController::class,'addcart']);
Route::get('/logout',[UserController::class,'logout']);