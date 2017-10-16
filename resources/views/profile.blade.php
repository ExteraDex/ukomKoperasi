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
        <link rel="stylesheet" href="{{asset('css/profile.css')}}">
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
    <div id="ofname">
        <h1>Profile of <span class="acc-name size">{{Auth::user()->name}}</span></h1>
    </div><!--/#ofname-->
    <div class="container">
    <div class="row">
        <div class="card-panel summary">
            <div class="left">
            <i class="material-icons">account_box</i><span>Summary</span>
            </div>
            <div class="right">
                <a id="form-form" href="#!"><i class="material-icons">settings_applications</i><span>Edit profile</span></a>
            </div>
        </div>
        <div class="col-md-3">
        <div class="card-panel">
            <span class="user-name">{{Auth::user()->name}}</span>
            <!--KONDISI IF ELSE-->
            @if(Auth::user()->role == 'admin')
                <span class="user-level" sadmin>Petugas </span>
            @elseif(Auth::user()->role == 'member')
                <span class="user-level" admin>Anggota </span>
            @endif
<!--            <span class="user-level" guest>User || Guest </span>-->
            <!--END IF ELSE-->
            <img class="user-image" src="{{asset('')}}img/profil/{{Auth::user()->image}}" alt="">
        </div><!--/.card-panel-->
        </div><!--/.col-->
        <div class="col-md-9">
        <div class="card-panel">
            <div class="row">
            <div class="data-komen col-xs-4">
                <p class="tr">Name</p>
                <p class="tr ea-form">Password</p>
                <p class="tr">Email</p>
                <p class="tr">Alamat</p>
            </div><!--/.col-->
            <div class="data-awal col-xs-8">
                <p class="tr">{{Auth::user()->name}}</p>
                <p class="tr">{{Auth::user()->email}}</p>
                <p class="tr">{{Auth::user()->alamat}}</p>
            </div><!--/.col-->
            <div class="user-edit-info col-xs-8 ea-form">
                <form action="/profile/{{Auth::user()->id}}" material="off" method="post">
                    <div class="form-group">    
                        <input type="text" class="form-control"  placeholder="UserName" name="name" value="{{ Auth::user()->name }}">  
                    </div>
                    <div  class="form-group"> 
                        <input type="password" class="form-control"  placeholder="Password Kosongkan bila tidak diupdate" name="password">  
                    </div> 
                    <div class="form-group">    
                        <input type="email" class="form-control"  placeholder="Email" name="email" value="{{Auth::user()->email}}">  
                    </div> 
                    <div class="form-group">    
                        <input type="text" class="form-control"  placeholder="Adderes" name="alamat" value="{{Auth::user()->alamat}}">  
                    </div>  
                    <div class="form-group input-field">
                    <select name="image">
                        <option value="default1.jpg" @if(Auth::user()->image == 'default1.jpg') selected @endif>default1.jpg</option>
                        <option value="default2.jpg" @if(Auth::user()->image == 'default2.jpg') selected @endif>default2.jpg</option>
                        <option value="avatar1.jpg" @if(Auth::user()->image == 'avatar1.jpg') selected @endif>avatar1.jpg</option>
                        <option value="avatar2.jpg" @if(Auth::user()->image == 'avatar2.jpg') selected @endif>avatar2.jpg</option>
                        <option value="avatar3.jpg" @if(Auth::user()->image == 'avatar3.jpg') selected @endif>avatar3.jpg</option>
                        <option value="avatar4.jpg" @if(Auth::user()->image == 'avatar4.jpg') selected @endif>avatar4.jpg</option>
                        <option value="avatar5.jpg" @if(Auth::user()->image == 'avatar5.jpg') selected @endif>avatar5.jpg</option>
                        <option value="avatar6.jpg" @if(Auth::user()->image == 'avatar6.jpg') selected @endif>avatar6.jpg</option>
                      </select>   
                    </div>
                     {{csrf_field()}}
                    <input type="hidden" name="_method" value="put">
                    <input type="submit" value="SAVE" class="btn blue">
                    <input id="cancel-form" type="button" value="CANCEL" class="btn red">
                </form>
            </div><!--/.col-->
            </div>
        </div><!--/.card-panel-->
        </div><!--/.col-->
    </div><!--/.row-->
    </div><!--/.container-->
</main>
    <script>
        $('#form-img').click(function(){
            $('.user-edit-image').toggle('fast'); 
        });
        $('#form-form').click(function(){
            $('.ea-form').toggle('fast'); 
            $('.data-awal').toggle('fast');
            document.getElementById('form-img').style.display = "block";
            $('#form-form').toggle('fast');
        });
        $('#cancel-form').click(function(){
            $('.ea-form').toggle('fast'); 
            $('.data-awal').toggle('fast');
            document.getElementById('form-img').style.display = "none";
            $('#form-form').toggle('fast');
            $('.user-edit-image').toggle('hide'); 
        });
    </script>
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
@include('tema/footer')
</body>
</html>