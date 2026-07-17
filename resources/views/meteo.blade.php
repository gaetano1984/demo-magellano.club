<html>
    <head>
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
            border-radius: 50px;
            gap: 10px;
        }
        @media screen and (max-width:767){
            .content{
                width: 50%;
                grid-template-columns: repeat(1,1fr)
            }
        }
        @media screen and (min-width:768px){
            .content{
                width: 90%;
                grid-template-columns: repeat(7,1fr)
            }
        }
        .daytxt{
            text-align: center;
            font-weight: blod;
            font-size: 50px;
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
    </body>
</html>