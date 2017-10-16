@extends('tema.halaman-create')
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
                <form action="/pinjaman" method="post">
                    <div class="form-group">   
                        <label>Nama Pinjaman</label>   
                        <input type="text" name="nama_pinjaman" value="" placeholder="Nama Pinjaman">  
                    </div> 
                    <div class="form-group">   
                        <label>Besar Pinjaman</label>   
                        <input type="text" name="besar_pinjaman" placeholder="besar_pinjaman">  
                    </div> 
                    <div class="form-group">   
                        <label>Tanggal Pengajuan</label>   
                        <input type="date" name="tgl_pengajuan_pinjaman" value="" placeholder="tgl_pengajuan_pinjaman" class="datepicker">  
                    </div> 
                    <div class="form-group">   
                        <label>Tanggal Diterima</label>   
                        <input type="date" name="tgl_acc_pinjaman" placeholder="tgl_acc_pinjaman" class="datepicker">  
                    </div> 
                    <div class="form-group">   
                        <label>Tanggal Pinjaman</label>   
                        <input type="date" name="tgl_pinjaman" placeholder="tgl_pinjaman" class="datepicker">  
                    </div> 
                    <div class="form-group">   
                        <label>Tanggal pelunasan</label>   
                        <input type="date" name="tgl_pelunasan" placeholder="tgl_pelunasan" class="datepicker">  
                    </div> 
                    <div class="form-group">   
                        <label>Keterangan</label>   
                        <input type="text" name="ket" placeholder="ket">  
                    </div> 
                    <input type="hidden" name="id" value="" placeholder="">
                    <div class="input-field">
                      <select name="anggota_id">
                         @foreach($anggota as $in)
                            <option value="{{$in->id}}">{{$in->nama}}</option>
                        @endforeach
                      </select>   
                      <label for="">Anggota_ID</label>
                    </div>
                    <div class="input-field">
                      <select name="angsuran_id" >
                        @foreach($angsuran as $in)
                            <option value="{{$in->id}}">{{$in->besar_angsuran}}</option>
                        @endforeach
                      </select>   
                      <label for="">Angsuran_ID</label>
                    </div>
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                     <input type="submit" value="Create" class="btn blue">
                    <a href="/pinjaman"><input id="cancel-form" type="button" value="CANCEL" class="btn red"></a>
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