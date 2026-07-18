@extends('layout.main')

@section('maincontent')
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
@endsection

@section('extrajs')
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
@endsection