<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        body{
            background: #00FFAA;
        }
        .content{
            width: 50%;
            background: #00FFFF;
            margin:auto;
            padding: 5px;
            display:grid;
            grid-template-columns: repeat(5,1fr)
            gap: 20px;
        }
        .element{
            background: blue;
        }
        @media screen and (max-width:767){
            .content{
                grid-template-columns: repeat(1,1fr)
            }
        }
        @media screen and (min-width:768px){
            .content{
                grid-template-columns: repeat(7,1fr)
            }
        }
    </style>        
    </head>
    <body>
        <div class="content">
            <span class="element">Mon</span>
            <span class="element">Tue</span>
            <span class="element">Wed</span>
            <span class="element">Thu</span>
            <span class="element">Fri</span>
            <span class="element">Sat</span>
            <span class="element">Sun</span>
        </div>
    </body>
</html>