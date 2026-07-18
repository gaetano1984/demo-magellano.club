<html>
    <head>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        @yield('maincontent')
        <div class="footer">
            <a href="{{route('settings')}}">Settings</a> - <a href="{{route('meteo')}}">Meteo</a>
        </div>
        @yield('extrajs')
    </body>
</html>