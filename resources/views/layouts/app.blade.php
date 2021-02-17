<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">

    <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('css/login_Forrm_style.css')}}" rel="stylesheet">
    <link href="{{asset('css/changa/Changa-Bold.ttf')}}" >
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">
      
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
