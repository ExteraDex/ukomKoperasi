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
                <form action="/anggota" method="post">
                    <input type="hidden" name="id" value="" placeholder="">

                    <div class="form-group">   
                        <label>Nama</label>   
                        <input type="text" name="nama" value="" placeholder="nama">  
                    </div>
                    <div class="form-group">   
                        <label>Alamat</label>   
                        <input type="text" name="alamat" value="" placeholder="alamat">  
                    </div> 
                    <div class="form-group">   
                        <label>TglLhr</label>   
                        <input type="date" name="tgl_lhr" value="" placeholder="tgl_lahir" class="datepicker">  
                    </div> 
                    <div class="form-group">   
                        <label>TmpLhr</label>   
                        <input type="text" name="tmp_lhr" value="" placeholder="tmp_lhr">  
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
                        <input type="text" name="status" value="" placeholder="status">  
                    </div> 
                    <div class="form-group">   
                        <label>noHP</label>   
                        <input type="text" name="no_tlp" value="" placeholder="no_tlp">  
                    </div> 
                    <div class="form-group">   
                        <label>Ket</label>   
                        <input type="text" name="ket" value="" placeholder="ket">  
                    </div> 
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                     <input type="submit" value="Create" class="btn blue">
                    <a href="/anggota"><input id="cancel-form" type="button" value="CANCEL" class="btn red"></a>
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