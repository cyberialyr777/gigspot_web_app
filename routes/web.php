<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\SeatsController;
use App\Http\Controllers\ProfileController;
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
Route::get("/", [HomeController::class , "index"]);

Route::get("/events", [EventsController::class , "eventos"]);

Route::get("/profile", [ProfileController::class , "profile"]);

Route::get("/seats", [SeatsController::class , "seats"]);

Route::controller(LoginController::class)->group(function(){
    Route::get("/loginView", "loginView")->name("loginView");
});