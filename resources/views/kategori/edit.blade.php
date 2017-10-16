@extends('tema.halaman-edit')
@section('content')
<div class="container">
    <div class="row">
        <div class="card-panel summary">
            <div class="left">
                <a id="form-form" href="#!"><i class="material-icons">settings_applications</i><span>Edit</span></a>
            </div>
        </div>
        <div class="col-md-3">
        <div class="card-panel">
            <span class="user-name">IkhsaNDex</span>
            <!--KONDISI IF ELSE-->
<!--            <span class="user-level" admin>Petugas || ADMIN </span>-->
            <span class="user-level" sadmin>Operator || Super-ADMIN </span>
<!--            <span class="user-level" guest>User || Guest </span>-->
            <!--END IF ELSE-->
            <img class="user-image" src="{{asset('img/profil/default1.jpg')}}" alt="">
        </div><!--/.card-panel-->
        </div><!--/.col-->
        <div class="col-md-9">
        <div class="card-panel">
            <div class="row">
            <div class="user-edit-info col-xs-12">
                <form action="/kategori/{{$var->id}}" method="post">
                    <div class="form-group">   
                        <label>Nama Pinjaman</label>   
                        <input type="text" name="nama_pinjaman" value="{{$var->nama_pinjaman}}" placeholder="nama_pinjaman">  
                    </div> 
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <input type="hidden" value="put" name="_method">
                     <input type="submit" value="Save" class="btn blue">
                    <a href="/kategori"><input id="cancel-form" type="button" value="CANCEL" class="btn red"></a>
                </form>
            </div><!--/.col-->
            </div>
        </div><!--/.card-panel-->
        </div><!--/.col-->
    </div><!--/.row-->
    </div><!--/.container-->
@stop