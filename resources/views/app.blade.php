<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ARQMASUNO</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1:300,400" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body ontouchstart="">
    <div id="app">
        @yield('content')
    </div>

    <script src="/js/app.js"></script>
    <script>
        function isMobileDevice() {
            return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
        };
        if(isMobileDevice()){
            let current_location = window.location.href
            let last_character = current_location.charAt(current_location.length - 1)
            if(last_character != 'm') {
                let redirect = window.location.href + '/m';
                redirect = redirect.replace("//m", "/m");
                window.location.replace(redirect);
            }
        }
    </script>
</body>
</html>
