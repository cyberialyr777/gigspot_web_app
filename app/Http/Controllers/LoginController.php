<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function loginView(){
        return view("login");
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
}
