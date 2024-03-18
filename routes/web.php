<?php

use App\Http\Controllers\AdminController;
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
Route::get("/index", [HomeController::class , "index"]);

Route::get("/events", [EventsController::class , "eventos"]);

Route::get("/seats", [SeatsController::class , "seats"]);
Route::get("/addEventForm", [SeatsController::class, "addEventForm"]);
Route::get("/updateEventForm", [SeatsController::class , "updateEventForm"]);

Route::controller(AdminController::class)->group(function(){
    Route::get("/admin", "index")->name("index");
    Route::get("/verBandas", "index2")->name("index2");
    Route::get("/verUsers", "index3") -> name ("index3");
    Route::get("/adminSol", "index4") -> name ("index4");
    Route::get("/adminTick", "index5") -> name ("index5");
});

Route::controller(LoginController::class)->group(function(){
    Route::get("/loginView", "loginView")->name("loginView");
    Route::get("/registerUserView", "registerUserView");
    Route::get("/registerBandView", "registerBandView");
    Route::get("/registerSclectionView", "registerSclectionView");
    Route::get("/infoConcert", "infoConcert");
});

Route::controller(ProfileController::class)->group(function(){
    Route::get("/profiles", "profileU");
    Route::get("/plantilla", "navbar")->name("navbar");
    Route::get("/profileBand", "profileBand");
    Route::get("/infoConcerts", "infoConcerts");
    Route::get("/info_band", "infoBand");
    Route::get("/searchBar", "searchBar");
    Route::get("/userUpdate", "userUpdate");
    Route::get("/bandUpadte", "bandUpadte");
});



