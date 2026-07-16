<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeteoController extends Controller
{
    //

    public function meteo(){
        return view('meteo');
    }
}
