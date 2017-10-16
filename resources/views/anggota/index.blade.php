@extends('tema.halaman-konten')
@section('content')
<div class="container">
<div class="row">
<table class="card-panel bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>TglLahir</th>
            <th>TmpLahir</th>
            <th>Jkel</th>
            <th>Status</th>
            <th>noHP</th>
            <th>ket</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($var as $var)
        <tr>
            <td>{{$var->nama}}</td>
            <th>{{$var->alamat}}</th>
            <th>{{$var->tgl_lhr}}</th>
            <th>{{$var->tmp_lhr}}</th>
            <th>{{$var->j_kel}}</th>
            <th>{{$var->status}}</th>
            <th>{{$var->no_tlp}}</th>
            <th>{{$var->ket}}</th>
            <td>
                <a href="/anggota/{{$var->id}}/edit" class="btn2 btn-xs btn-primary" title="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 
                <a href="/anggota/{{ $var->id}}" class="btn2 btn-xs btn-success" title="Show"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a> 
                <form action="/anggota/{{$var->id}}" method="post">
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
    <a href="anggota/create" class="btn3"> CREATE </a>
</div>
</div><!-- row -->
</div><!--/.conteiner -->
 @stop