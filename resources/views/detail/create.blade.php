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
                <form action="/detail" method="post">
                    <div class="form-group">   
                        <label>Tanggal jatuh tempo</label>   
                        <input type="date" name="tgl_jatuh_tempo" value="" placeholder="tgl_jatuh_tempo" class="datepicker">  
                    </div> 
                    <div class="form-group">   
                        <label>Besar Angsuran</label>   
                        <input type="text" name="bsr_angsuran" value="" placeholder="besar_angsuran">  
                    </div> 
                    <div class="form-group">   
                        <label>Keterangan</label>   
                        <input type="text" name="ket" value="" placeholder="ket">  
                    </div> 
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                     <input type="submit" value="Create" class="btn blue">
                    <a href="/detail"><input id="cancel-form" type="button" value="CANCEL" class="btn red"></a>
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