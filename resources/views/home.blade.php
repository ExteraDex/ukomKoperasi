@extends('tema.halaman-konten')
 
 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
             <div class="card-panel">
                 <div class="panel-heading">
                     <h1>Koperasi</h1>
                 </div>
 
                 <div class="panel-body">
                     <div class="alert alert-success">
                        <h4>Selamat datang, anda login sebagai <i>{{Auth::user()->role}}</i></h4>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection