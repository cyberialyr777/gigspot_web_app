<?php

use App\Http\Controllers\AdminController;
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
});

/*
|Rutas Luis_Candelario
*/
Route::controller(AdminController::class)->group(function(){
    Route::get("/Admin", "index")->name("index");
    Route::get("/VerBandas", "index2")->name("index2");
    Route::get("/VerUsers", "index3") -> name ("index3");
    Route::get("/AdminSol", "index4") -> name ("index4");
});

