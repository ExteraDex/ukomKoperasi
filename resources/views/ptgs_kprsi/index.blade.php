@extends('tema.halaman-konten')
@section('content')
<div class="container">
<div class="row">
<table class="card-panel bordered">
    <thead>
        <tr>
            <td>Nama</td>
            <td>Alamat</td>
            <td>NoHP</td>
            <td>TempatLhir</td>
            <td>TanggalLahir</td>
            <td>Keterangan</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($var as $var)
        <tr>
            <td>{{$var->nama}}</td>
            <td>{{$var->alamat}}</td>
            <td>{{$var->tgl_simpanan}}</td>
            <td>{{$var->tmp_lhr}}</td>
            <td>{{$var->tgl_lhr}}</td>
            <td>{{$var->ket}}</td>
            <td>
                <a href="/petugas/{{$var->id}}/edit" class="btn2 btn-xs btn-primary" title="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 
                <a href="/petugas/{{ $var->id}}" class="btn2 btn-xs btn-success" title="Show"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a> 
                <form action="/petugas/{{$var->id}}" method="post">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <input type="hidden" value="delete" name="_method">
                    <button type="submit"  class="btn2 btn-xs btn-danger" title="Delete">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="card-panel">
    <a href="petugas/create" class="btn3"> CREATE </a>
</div>
</div><!-- row -->
</div><!--/.conteiner -->
 @stop