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
                <form action="/pinjaman/{{$ea->id}}"  method="post" material="off">
                    <input type="hidden" name="id" value="{{$ea->id}}" placeholder="">
                    <div class="form-group">   
                        <label for="fo1">Nama Pinjaman</label>   
                        <input type="text" name="nama_pinjaman" value="{{$ea->nama_pinjaman}}" placeholder="Nama Pinjaman">  
                    </div>
                    <div class="form-group">   
                        <label for="fo1">Besar Pinjaman</label>   
                        <input type="text" name="besar_pinjaman" value="{{$ea->besar_pinjaman}}" placeholder="besar_pinjaman">
                    </div>
                    <div class="form-group">
                         <label for="fo3">Tanggal pengajuan</label> 
                         <input type="date" name="tgl_pengajuan_pinjaman" value="{{$ea->tgl_pengajuan_pinjaman}}" placeholder="tgl_pengajuan_pinjaman" class="datepicker">  
                    </div>
                    <div class="form-group">
                         <label for="fo3">Tanggal diterima</label> 
                         <input type="date" name="tgl_acc_pinjaman" value="{{$ea->tgl_acc_pinjaman}}" placeholder="tgl_acc_pinjaman" class="datepicker">  
                    </div>
                    <div class="form-group">
                         <label for="fo3">Tanggal Pinjam</label> 
                         <input type="date" name="tgl_pinjaman" value="{{$ea->tgl_pinjaman}}" placeholder="tgl_pinjaman" class="datepicker">  
                    </div>
                    <div class="form-group">
                         <label for="fo3">Tanggal pelunasan</label> 
                         <input type="date" name="tgl_pelunasan" value="{{$ea->tgl_pelunasan}}" placeholder="tgl_pelunasan" class="datepicker">  
                    </div>
                    <div class="form-group input-field"><label>Anggota_ID</label>
                      <select name="anggota_id">    
                       @foreach($anggota as $ina)
                            <option value="{{$ea->anggota_id}}" @if(($ea->anggota_id) == ($ina->id)) selected @endif>
                                {{$ina->nama}}
                            </option>
                       @endforeach  
                      </select>   
                    </div>
                    <div class="form-group">
                         <label for="fo3">Angsuran_ID</label> 
                         <input type="text" name="angsuran_id" value="{{$ea->angsuran_id}}" placeholder="angsuran_id">  
                    </div>
                    <div class="form-group">
                         <label for="fo3">Keterangan</label> 
                         <input type="text" name="ket" value="{{$ea->ket}}" placeholder="ket">  
                    </div>
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <input type="hidden" value="put" name="_method">
                    <input type="submit" value="SAVE" class="btn blue">
                    <a href="/pinjaman"><input id="cancel-form" type="button" value="CANCEL" class="btn red"></a>
                </form>
            </div><!--/.col-->
            </div>
        </div><!--/.card-panel-->
        </div><!--/.col-->
    </div><!--/.row-->
    </div><!--/.container-->
@stop