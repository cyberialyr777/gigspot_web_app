<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
        function eventos() {
        return view('events', ["titulo" => "events"]);
        }
}

