<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Anoesis</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
        {{-- <script src="{{asset('js/jquery-3.3.1.min.js')}}" type="text/javascript"></script> --}}
       
        
        <script src="{{asset('js/script.js')}}" type="text/javascript"></script>

       
    </head>
    <body>
        @include('includes.nav')
        <br>
        <br>
        <br>
        <br>
        @include('includes.video')
        <br>
        <br>
        @include('includes.about_me')
        <br>
        <br>
        @include('includes.tour_date')
        <br>
        <br>
        @include('includes.music')
        <br>
        <br>
        @include('includes.photos')
        <br>
        <br>
        @include('includes.form')
        <br>
        <br>
        <br>
        <br>
    </body>
</html>
