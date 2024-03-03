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
        return view("infoConcerts");
    }
}
