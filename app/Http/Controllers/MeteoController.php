<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeteoController extends Controller
{
    //

    public function meteo(){
        $week = [
            "d1" => "Mon",
            "d2" => "Tue",
            "d3" => "Wed",
            "d4" => "Thu",
            "d5" => "Fri",
            "d6" => "Sat",
            "d7" => "Sun",
        ];

        $img = [
            '/img/cielo_sereno.png',
            '/img/coperto.png',
            '/img/neve.png',
            '/img/pioggia_leggera.png',
            '/img/poco_nuvoloso.png',
            '/img/temporale.png',
        ];

        $meteo = [];

        $d = intval(date('w'));
        for($i=$d; $i<=7; $i++){
            $meteo[] = [
                'day' => $week['d'.$i],
                'icon' => $img[rand(0,5)],
                'temp' => rand(0,40)
            ];
        }
        for($i=1; $i<$d; $i++){
            $meteo[] = [
                'day' => $week['d'.$i],
                'icon' => $img[rand(0,5)],
                'temp' => rand(0,40)
            ];
        }

        return view('meteo', ['data' => $meteo]);
    }
}
