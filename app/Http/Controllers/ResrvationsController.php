<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResrvationsController extends Controller
{
    //
    public function bookRoom() {
        return view('reservations/bookRoom');
    }
}
