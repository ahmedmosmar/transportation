<!DOCTYPE html>
<html>
<head>
	<title>{{ env('APP_NAME','myproject')}}</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">

	  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
		 <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
		 <link href="{{asset('css/style.css')}}" rel="stylesheet">
     <link href="{{asset('js/sweetalert.css')}}" rel="stylesheet">

</head>
<body>
  @include('includes/navbar')
  @include('includes.message')
@yield('content')
</body>
