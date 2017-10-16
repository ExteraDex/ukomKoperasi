@extends('tema.halaman-konten')
@section('content')
<div class="container">
<div class="row">
<table class="card-panel bordered">
    <thead>
        <tr>
            <td>Nama</td>
            <td>anggota_ID</td>
            <td>BesarPinjam</td>
            <td>Tglpengajuan</td>
            <td>TglACC</td>
            <td>tglpinjam</td>
            <td>TglPelunasan</td>
            <td>angsuranID</td>
            <td>KET</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($var as $var)
        <tr>
            <td>{{$var->nama_pinjaman}}</td>
            <td>{{$var->anggota_id}}</td>
            <td>{{$var->besar_pinjaman}}</td>
            <td>{{ $var->tgl_pengajuan_pinjaman}}</td>
            <td>{{ $var->tgl_acc_pinjaman}}</td>
            <td>{{ $var->tgl_pinjaman}}</td>
            <td>{{ $var->tgl_pelunasan}}</td>
            <td>{{ $var->angsuran_id}}</td>
            <td>{{ $var->ket}}</td>
            <td>
                <a href="/pinjaman/{{$var->id}}/edit" class="btn2 btn-xs btn-primary" title="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 
                <a href="/pinjaman/{{ $var->id}}" class="btn2 btn-xs btn-success" title="Show"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a> 
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
    <a href="pinjaman/create" class="btn3"> CREATE </a>
</div>
</div><!-- row -->
</div><!--/.conteiner -->
 @stop