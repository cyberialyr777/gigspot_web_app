<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function profileU(){
        return view("profile", ["titulo" => "User profile"]);
    }

    function profileBand(){
        return view("profile_band", ["titulo" => "Band profile"]);
    }

    function infoConcerts(){
        return view("info_concert", ["titulo" => "infoConcert"]);
    }

    function infoBand(){
        return view("info_band", ["titulo" => "infoConcert"]);
    }

    function searchBar(){
        return view("search_bar", ["titulo" => "Ass event"]);
    }

    function userUpdate(){
        return view("userEdit", ["titulo" => "User update"]);
    }
    
    function bandUpadte(){
        return view("bandEdit",  ["titulo" => "Band update"]);
    }
}
