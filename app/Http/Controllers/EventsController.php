<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventsController extends Controller
{
        function eventos() {
                return view('events', ["titulo" => "events"]);
        }


}


