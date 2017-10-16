@extends('tema.halaman-create')
@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
@section('content')
<div class="container">
    <div class="row">
        <div class="card-panel summary">
            <div class="left">
                <a id="form-form" href="#!"><i class="material-icons">create</i><span>Create</span></a>
            </div>
        </div>
        <div class="col-md-2">
        </div><!--/.col-->
        <div class="col-md-8">
        <div class="card-panel">
            <div class="row">
            <div class="user-edit-info col-xs-12">
                <form action="/simpanan" method="post" material="off">
                    <div class="form-group">   
                        <label>Nama Simpanan</label>   
                        <input type="text" name="nm_simpanan" value="" placeholder="nama">  
                    </div> 
                    <div class="form-group">   
                        <label>AnggotaID</label>   
                        <input type="text" name="anggota_id" value="" placeholder="id anggota">  
                    </div> 
                    <div class="form-group">   
                        <label>TGl_Simpanan</label>   
                        <input type="date" name="tgl_simpanan" value="" class="datepicker">  
                    </div> 
                    <div class="form-group">   
                        <label>Besar simpanan</label>   
                        <input type="text" name="besar_simpanan" value="" placeholder="besar simpanan">  
                    </div> 
                    <div class="form-group">   
                        <label>Tanggal Pinjaman</label>   
                        <input type="date" name="tgl_pinjaman" placeholder="tgl_pinjaman" class="datepicker">  
                    </div> 
                    <div class="form-group">   
                        <label>Keterangan</label>   
                        <input type="text" name="ket" value="" placeholder="ket">  
                    </div> 
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                     <input type="submit" value="Create" class="btn blue">
                    <a href="/simpanan"><input id="cancel-form" type="button" value="CANCEL" class="btn red"></a>
                </form>
            </div><!--/.col-->
            </div>
        </div><!--/.card-panel-->
        </div><!--/.col-->
        <div class="col-md-2">
        </div><!--/.col-->
    </div><!--/.row-->
    </div><!--/.container-->
@stop