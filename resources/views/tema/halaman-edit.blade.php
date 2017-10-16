<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import CSS-->
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/bootlize.min.css')}}"  media="screen,projection"/>
        <!--Import  ICON Social media-->
        <link rel="stylesheet" href="{{asset('css/bootlize-sosmedicon.css')}}">
        <link rel="stylesheet" href="{{asset('css/theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/edit.css')}}">
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
    <script>
    $('.datepicker').pickadate({
     selectMonths: true, // Creates a dropdown to control month
     selectYears: 15, // Creates a dropdown of 15 years to control year,
     today: 'Today',
     clear: 'Clear',
     close: 'Ok',
     closeOnSelect: false // Close upon selecting a date,
    });
    $(document).ready(function() {
    $('select').material_select();
    });
    </script>
</main>
@include('tema/footer')
</body>
</html>