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
                <form action="/angsuran" method="post">
                    <div class="form-group">   
                        <label>KategoriID</label>   
                        <input type="text" name="kategori_id" value="" placeholder="kategori_id">  
                    </div> 
                    <div class="form-group">   
                        <label>AnggotaID</label>   
                        <input type="text" name="anggota_id" value="" placeholder="anggota_id">  
                    </div> 
                    <div class="form-group">   
                        <label>TGL pembayaran</label>   
                        <input type="date" name="tgl_pembayaran" value="" placeholder="tgl_pembayaran" class="datepicker">  
                    </div> 
                    <div class="form-group">   
                        <label>AngsuranKe</label>   
                        <input type="text" name="angsuran_ke" value="" placeholder="angsuran_ke">  
                    </div> 
                    <div class="form-group">   
                        <label>BesarAngsuran</label>   
                        <input type="text" name="besar_angsuran" value="" placeholder="besar_angsuran">  
                    </div> 
                    <div class="form-group">   
                        <label>Keterangan</label>   
                        <input type="text" name="ket" value="" placeholder="ket">  
                    </div> 
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                     <input type="submit" value="Create" class="btn blue">
                    <a href="/angsuran"><input id="cancel-form" type="button" value="CANCEL" class="btn red"></a>
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