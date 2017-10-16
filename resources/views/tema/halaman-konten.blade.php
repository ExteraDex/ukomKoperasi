<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KOPERASI</title>
    <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import CSS-->
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/bootlize.min.css')}}"  media="screen,projection"/>
        <!--Import  ICON Social media-->
        <link rel="stylesheet" href="{{asset('css/bootlize-sosmedicon.css')}}">
        <link rel="stylesheet" href="{{asset('css/theme.css')}}">
        <!--Import Google Icon Font (IF NEED )
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <!--Import Js-->
        <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('js/bootlize.min.js')}}"></script>
        <script src="{{asset('js/template.js')}}"></script>
</head>
<body>
@include('tema/header')
<main>
 @yield('content')
</main>
@include('tema/footer')
</html>