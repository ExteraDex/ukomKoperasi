@extends('tema.halaman-konten')
@section('content')
<div class="container">
<div class="row">
<table class="card-panel bordered">
    <thead>
        <tr>
            <th>TanggalJauhTempo</th>
            <th>BesarAnggsuran</th>
            <th>Ketegori</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach($var as $var)
        <tr>
            <td>{{$var->tgl_jatuh_tempo}}</td>
            <td>{{$var->bsr_angsurann}}</td>
            <td>{{$var->ket}}</td>
            <td>
                <a href="/detail/{{$var->id}}/edit" class="btn2 btn-xs btn-primary" title="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 
                <a href="/detail/{{ $var->id}}" class="btn2 btn-xs btn-success" title="Show"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a> 
                <form action="/detail/{{$var->id}}" method="post">
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
    <a href="detail/create" class="btn3"> CREATE </a>
</div>
</div><!-- row -->
</div><!--/.conteiner -->
 @stop
