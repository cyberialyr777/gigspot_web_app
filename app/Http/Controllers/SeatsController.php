<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeatsController extends Controller
{
    function seats() {
        return view('seats', ["titulo" => "Seats"]);
    }

    function addEventForm(){
        return view("addEventForm", ["titulo" => "Event add"]);
    }

    function updateEventForm(){
        return view("updateEventForm", ["titulo" => "Event Update"]);
    }
}
