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
                <form action="/anggota/{{$var->id}}" method="post">
                    <input type="hidden" name="id" value="{{$var->id}}" placeholder="">

                    <div class="form-group">   
                        <label>Nama</label>   
                        <input type="text" name="nama" value="{{$var->nama}}" placeholder="nama">  
                    </div>
                    <div class="form-group">   
                        <label>Alamat</label>   
                        <input type="text" name="alamat" value="{{$var->alamat}}" placeholder="alamat">  
                    </div> 
                    <div class="form-group">   
                        <label>TglLhr</label>   
                        <input type="date" name="tgl_lhr" value="{{$var->tgl_lhr}}" placeholder="tgl_lahir" class="datepicker">  
                    </div> 
                    <div class="form-group">   
                        <label>TmpLhr</label>   
                        <input type="text" name="tmp_lhr" value="{{$var->tmp_lhr}}" placeholder="tmp_lhr">  
                    </div> 
                    <div class="input-field">
                      <select name="j_kel">
                            <option value="l">lakilaki</option>
                            <option value="p">perempuan</option>
                      </select>
                      <label for="">J_KEL</label>
                    </div>
                    <div class="form-group">   
                        <label>Status</label>   
                        <input type="text" name="status" value="{{$var->status}}" placeholder="status">  
                    </div> 
                    <div class="form-group">   
                        <label>noHP</label>   
                        <input type="text" name="no_tlp" value="{{$var->no_tlp}}" placeholder="no_tlp">  
                    </div> 
                    <div class="form-group">   
                        <label>Ket</label>   
                        <input type="text" name="ket" value="{{$var->ket}}" placeholder="ket">  
                    </div>  
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <input type="hidden" value="put" name="_method">
                     <input type="submit" value="Save" class="btn blue">
                    <a href="/anggota"><input id="cancel-form" type="button" value="CANCEL" class="btn red"></a>
                </form>
            </div><!--/.col-->
            </div>
        </div><!--/.card-panel-->
        </div><!--/.col-->
    </div><!--/.row-->
    </div><!--/.container-->
@stop