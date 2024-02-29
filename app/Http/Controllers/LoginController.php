<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function loginView(){
        return view("login");
    }

    function registerUserView(){
        return view("registerUser");
    }

    function registerBandView(){
        return view("registerBand");
    }

    function registerSclectionView(){
        return view("registerSelectionUB");
    }
}
