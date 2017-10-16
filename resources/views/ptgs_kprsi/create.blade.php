@extends('tema.halaman-edit')
@section('content')
<div class="container">
    <div class="row">
        <div class="card-panel summary">
            <div class="left">
                <a id="form-form" href="#!"><i class="material-icons">settings_applications</i><span>Create</span></a>
            </div>
        </div>
        <div class="col-md-2">
        </div><!--/.col-->
        <div class="col-md-8">
        <div class="card-panel">
            <div class="row">
            <div class="user-edit-info col-xs-12">
                <form action="/petugas"  method="post" material="off">
                    <div class="form-group">   
                        <label>Nama</label>   
                        <input type="text" name="nama" value="" placeholder="nama">
                    </div>
                    <div class="form-group">   
                        <label>Alamat</label>   
                        <input type="text" name="alamat" value="" placeholder="alamat">
                    </div>
                    <div class="form-group">   
                        <label>NoHP</label>   
                        <input type="text" name="no_tlp" value="" placeholder="no telepon">
                    </div>
                    <div class="form-group">   
                        <label>TempatLahir</label>   
                        <input type="text" name="tmp_lhr" value="" placeholder="tempat lahir">
                    </div>
                    <div class="form-group">   
                        <label>TempatLahir</label>   
                        <input type="date" name="tgl_lhr" value="" class="datepicker">
                    </div>
                    <div class="form-group">   
                        <label>Keterangan</label>   
                        <input type="text" name="ket" value="" placeholder="keterangan">
                    </div>
                    <input type="submit" value="Create" class="btn blue">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <a href="/petugas"><input id="cancel-form" type="button" value="CANCEL" class="btn red"></a>
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