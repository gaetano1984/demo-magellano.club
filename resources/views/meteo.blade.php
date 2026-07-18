<html>
    <head>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        body{
            background: #00FFFF;
        }
        .content{
            width: 90%;
            margin:auto;
            padding: 5px;
            display:grid;
            gap: 20px;
        }
        .element{
            background: white;
            display: flex;
            flex-direction: column;
            text-align: center;
            border:  blue solid 1px;
            border-radius: 25px;
            gap: 10px;
            padding-top:10px;
            padding-bottom:10px;
        }
        @media screen and (max-width:767px){
            .content{
                width: 80%;
                grid-template-columns: repeat(1,1fr)
            }
            .element{
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                width
            }
            .daytxt{
                margin: auto;
                flex:1;
                font-size: 35px;
            }
            .temptxt{
                margin: auto;
                flex:1;
                font-size: 30px;
            }
            .iconweather{
                width: 30%;
            }
        }
        @media screen and (min-width:768px){
            .content{
                width: 90%;
                grid-template-columns: repeat(7,1fr)
            }
            .daytxt{
                margin: auto;
                flex:1;
                font-size: 35px;
            }
            .temptxt{
                margin: auto;
                flex:1;
                font-size: 25px;
            }
            .iconweather{
                width: 90%;
                margin: auto;
            }
        }
        .daytxt{
            text-align: center;
            font-weight: bold;
        }
        .temptxt{
            text-align: center;
            font-weight: bold;
        }
    </style>        
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
                                            '+v.temp_min+'&deg; - '+v.temp_max+'&deg; \
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