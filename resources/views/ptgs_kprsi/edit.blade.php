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
                <form action="/petugas/{{$var->id}}"  method="post" material="off">
                    <div class="form-group">   
                        <label>Nama</label>   
                        <input type="text" name="nama" value="{{$var->nama}}" placeholder="nama">
                    </div>
                    <div class="form-group">   
                        <label>Alamat</label>   
                        <input type="text" name="alamat" value="{{$var->alamat}}" placeholder="alamat">
                    </div>
                    <div class="form-group">   
                        <label>NoHP</label>   
                        <input type="text" name="no_tlp" value="{{$var->no_tlp}}" placeholder="no telepon">
                    </div>
                    <div class="form-group">   
                        <label>TempatLahir</label>   
                        <input type="text" name="tmp_lhr" value="{{$var->tmp_lhr}}" placeholder="tempat lahir">
                    </div>
                    <div class="form-group">   
                        <label>TempatLahir</label>   
                        <input type="date" name="tgl_lhr" value="{{$var->tgl_lhr}}" class="datepicker">
                    </div>
                    <div class="form-group">   
                        <label>Keterangan</label>   
                        <input type="text" name="ket" value="{{$var->ket}}" placeholder="keterangan">
                    </div>
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <input type="hidden" value="put" name="_method">
                    <input type="submit" value="SAVE" class="btn blue">
                    <a href="/petugas"><input id="cancel-form" type="button" value="CANCEL" class="btn red"></a>
                </form>
            </div><!--/.col-->
            </div>
        </div><!--/.card-panel-->
        </div><!--/.col-->
    </div><!--/.row-->
    </div><!--/.container-->
@stop