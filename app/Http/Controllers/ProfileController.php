<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function profileU(){
        return view("profile");
    }

    function profileBand(){
        return view("profile_band", ["titulo" => "Band profile"]);
    }

    function infoConcerts(){
        return view("info_concert", ["titulo" => "infoConcert"]);
    }
}
