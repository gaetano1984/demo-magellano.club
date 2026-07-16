<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeteoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/meteo', [MeteoController::class, 'meteo']);