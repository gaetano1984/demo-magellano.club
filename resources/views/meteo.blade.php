<html>
    <head>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <div class="content">
            @foreach($data as $k=>$d)
                <div class="element">
                    <div class="daytxt">
                        {{$d['day']}}
                    </div>
                    <div>
                        <img src="{{$d['icon']}}" alt="">
                    </div>
                    <div class="daytxt">   
                        {{$d['temp']}}&deg;
                    </div>
                </div>
            @endforeach
        </div>
        <script>
            $(document).ready(function(){
                $.ajax({
                    url: 'api/meteo/getData'
                    ,success: function(data){
                        console.log(data);
                        $(data).each(function(k, v){
                            $('\
                                <div class="element">\
                                    <div class="daytxt">\
                                        '+v.date+'\
                                    </div>\
                                    <img class="iconweather" src="'+v.icon+'">\
                                        <div class="temptxt">\
                                            <span class="temp-min">'+v.temp_min+'&deg;</span> <span class="temp-max">'+v.temp_max+'&deg;</span> \
                                        </div>\
                                    <div>\
                                    </div>\
                                </div>\
                            ').appendTo('.content');
                        });
                    }
                })
            });
        </script>
    </body>
</html>