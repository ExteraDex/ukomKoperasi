@extends('tema.halaman-konten')
@section('content')
<div class="container">
<div class="row">
<div class="card-panel">
    Hasil pencarian : <b>{{$query}}</b>
</div>
@if (count($pinjaman))
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
        @foreach($pinjaman as $var)
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
{{ $pinjaman->render() }}

@elseif (count($anggota))
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
        @foreach($anggota as $var)
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
{{ $anggota->render() }}

@elseif (count($petugas))
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
        @foreach($petugas as $var)
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
{{ $petugas->render() }}
</div><!-- row -->
</div><!--/.conteiner -->
@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$query}}</b> Tidak Ditemukan</div>
@endif
@endsection