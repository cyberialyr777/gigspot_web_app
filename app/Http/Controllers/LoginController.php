<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function loginView(){
        return view("login", ["titulo" => "Login"]);
    }

    function registerUserView(){
        return view("registerUser", ["titulo" => "User register"]);
    }

    function registerBandView(){
        return view("registerBand", ["titulo" => "Band register"]);
    }

    function registerSclectionView(){
        return view("registerSelectionUB", ["titulo" => "User seleccion"]);
    }

    function infoConcert(){
        return view("infoConcerts", ["titulo" => "Info Concert"]);
    }
    function profileU(){
        return view("profile_band");
    }

    function navbar(){
        return view("info_band");
    }
    function searchbar(){
        return view("search_bar");
    }
    function add_event(){
        return view("add_event_form");
    }
}
