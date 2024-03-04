<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeatsController extends Controller
{
    function seats() {
        return view('seats');
}
}
