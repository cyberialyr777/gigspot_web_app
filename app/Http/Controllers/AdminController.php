<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view ('Admin');
    }

    function index2(){
        return view ('AdminVerBandas');
    }

    function index3 (){
        return view ('AdminVerUsuarios');
    }

    function index4 (){
        return view ('AdminSolicitudes');
    }
}
