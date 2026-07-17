<?php

    /*
        1, 2, 3	Mainly clear, partly cloudy, and overcast
        45, 48	Fog and depositing rime fog
        51, 53, 55	Drizzle: Light, moderate, and dense intensity
        56, 57	Freezing Drizzle: Light and dense intensity
        61, 63, 65	Rain: Slight, moderate and heavy intensity
        66, 67	Freezing Rain: Light and heavy intensity
        71, 73, 75	Snow fall: Slight, moderate, and heavy intensity
        77	Snow grains
        80, 81, 82	Rain showers: Slight, moderate, and violent
        85, 86	Snow showers slight and heavy
        95 *	Thunderstorm: Slight or moderate
        96, 99 *	Thunderstorm with slight and heavy hail
     */

    return [
        'date' => [
            'd0' => 'Sun'
            ,'d1' => 'Mon'
            ,'d2' => 'Tue'
            ,'d3' => 'Wed'
            ,'d4' => 'Thu'
            ,'d5' => 'Fri'
            ,'d6' => 'Sat'
        ],
        'weather' => [
            'w1' => 'cielo_sereno.png'
            ,'w2' => 'poco_nuvoloso.png'
            ,'w3' => 'coperto.png'
            ,'w45' => ''
            ,'w48' => ''
            ,'w51' => 'pioggia_leggera.png'
            ,'w53' => 'pioggia_leggera.png'
            ,'w55' => 'pioggia_leggera.png'
            ,'w56' => 'pioggia_leggera.png'
            ,'w57' => 'pioggia_leggera.png'
            ,'w61' => 'pioggia_leggera.png'
            ,'w63' => 'pioggia_leggera.png'
            ,'w63' => 'pioggia_leggera.png'
            ,'w66' => 'pioggia_leggera.png'
            ,'w71' => 'neve.png'
            ,'w73' => 'neve.png'
            ,'w75' => 'neve.png'
            ,'w77' => 'neve.png'
            ,'w80' => 'temporale.png'
            ,'w81' => 'temporale.png'
            ,'w82' => 'temporale.png'
            ,'w85' => 'temporale.png'
            ,'w86' => 'temporale.png'
            ,'w95' => 'temporale.png'
            ,'w96' => 'temporale.png'
            ,'w99' => 'temporale.png'    
        ]
        
    ];