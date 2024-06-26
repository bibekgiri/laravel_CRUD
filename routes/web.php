<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


 Route::get("/users",[UserController::class,'index']);

 Route::get("/insert",[UserController::class,'insertdatas']);
 Route::post("/insert",[UserController::class,'insertData']);


 Route::get("/update",[UserController::class,'updatedatas']);
 Route::post("/update/{id}",[UserController::class,'updatedata']);

