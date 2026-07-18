<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MeteoController extends Controller
{
    //
    public function userSettings(){
        return view('users.settings');
    }

    public function getData(){
        $c = new Client([
            'base_uri' => 'https://api.open-meteo.com/v1/'
            ,'query' => [
                'latitude' => '45.3099'
                ,'longitude' => '9.5008'
                ,'daily' => 'weather_code,temperature_2m_min,temperature_2m_max'
            ]
        ]);
        $response = $c->request(
            'GET'
            ,'forecast'
        );
        $response = (string)$response->getBody();
        $response = json_decode($response, TRUE);
        
        $meteo = [];
        foreach($response['daily']['time'] as $k => $date){
            if(!array_key_exists($date, $meteo)){
                $meteo[$date] = [
                    'date' => config('meteo.date.d'.date('w', strtotime($date))).' '.date('d', strtotime($date))
                    ,'icon' => ""
                    ,'temp_min' => ""
                    ,'temp_max' => ""
                ];
            }
            $meteo[$date]['icon'] = '/img/'.config('meteo.weather.w'.$response['daily']['weather_code'][$k]);
            $meteo[$date]['temp_min'] = $response['daily']['temperature_2m_min'][$k];
            $meteo[$date]['temp_max'] = $response['daily']['temperature_2m_max'][$k];
        }
        $meteo = array_values($meteo);
        return response()->json($meteo);
    }

    public function meteo(){
        return view('meteo', ['data' => []]);
    }
}
