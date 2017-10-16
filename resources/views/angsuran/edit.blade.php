@extends('tema.halaman-edit')
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
                <form action="/angsuran/{{$var->id}}" method="post">
                    <div class="form-group">   
                        <label>KategoriID</label>   
                        <input type="text" name="kategori_id" value="{{$var->kategori_id}}" placeholder="kategori_id">  
                    </div> 
                    <div class="form-group">   
                        <label>AnggotaID</label>   
                        <input type="text" name="anggota_id" value="{{$var->anggota_id}}" placeholder="anggota_id">  
                    </div> 
                    <div class="form-group">   
                        <label>TGL pembayaran</label>   
                        <input type="date" name="tgl_pembayaran" value="{{$var->tgl_pembayaran}}" placeholder="tgl_pembayaran" class="datepicker">  
                    </div> 
                    <div class="form-group">   
                        <label>AngsuranKe</label>   
                        <input type="text" name="angsuran_ke" value="{{$var->angsuran_ke}}" placeholder="angsuran_ke">  
                    </div> 
                    <div class="form-group">   
                        <label>BesarAngsuran</label>   
                        <input type="text" name="besar_angsuran" value="{{$var->besar_angsuran}}" placeholder="besar_angsuran">  
                    </div> 
                    <div class="form-group">   
                        <label>Keterangan</label>   
                        <input type="text" name="ket" value="{{$var->ket}}" placeholder="ket">  
                    </div> 
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <input type="hidden" value="put" name="_method">
                     <input type="submit" value="Save" class="btn blue">
                    <a href="/angsuran"><input id="cancel-form" type="button" value="CANCEL" class="btn red"></a>
                </form>
            </div><!--/.col-->
            </div>
        </div><!--/.card-panel-->
        </div><!--/.col-->
    </div><!--/.row-->
    </div><!--/.container-->
@stop