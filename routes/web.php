<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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
Route::get("/home", [HomeController::class , "index"]);

Route::controller(LoginController::class)->group(function(){
    Route::get("/loginView", "loginView")->name("loginView");
    Route::get("/profile", "profileU")->name("profile");
    Route::get("/plantilla", "navbar")->name("navbar");
});