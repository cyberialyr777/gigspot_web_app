<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view ('admin',  ["titulo" => "Administrador"]);
    }

    function index2(){
        return view ('adminVerBandas', ["titulo" => "Bandas"]);
    }

    function index3 (){
        return view ('adminVerUsuarios',  ["titulo" => "Usuarios"]);
    }

    function index4 (){
        return view ('adminSolicitudes', ["titulo" => "Solicitudes"]);
    }
        function index5 (){
            return view ('adminTick', ["titulo" => "Tickets"]);
        }
}
