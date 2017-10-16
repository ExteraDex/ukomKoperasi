@extends('tema.halaman-konten')
@section('content')
<div class="container">
<div class="row">
<table class="card-panel bordered">
    <thead>
        <tr>
            <td>Kategori_ID</td>
            <td>anggota_ID</td>
            <td>Tgl pembayaran</td>
            <td>angsuran ke</td>
            <td>besar angsuran</td>
            <td>ket</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($var as $var)
        <tr>
            <td>{{$var->kategori_id}}</td>
            <td>{{$var->anggota_id}}</td>
            <td>{{$var->tgl_pembayaran}}</td>
            <td>{{ $var->angsuran_ke}}</td>
            <td>{{ $var->besar_angsuran}}</td>
            <td>{{ $var->ket}}</td>
            <td>
                <a href="/angsuran/{{$var->id}}/edit" class="btn2 btn-xs btn-primary" title="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 
                <a href="#!" class="btn2 btn-xs btn-success" title="Show"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a> 
                <form action="/angsuran/{{$var->id}}" method="post">
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
    <a href="angsuran/create" class="btn3"> CREATE </a>
</div>
</div><!-- row -->
</div><!--/.conteiner -->
 @stop