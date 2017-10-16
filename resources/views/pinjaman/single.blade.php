<h1>Halaman Single</h1>
<p> {{ $var->id}} </p>
    <p> {{ $var->nama_pinjaman}} </p>
    <p> {{ $var->ket }}</p>
    {{ date('F d, Y', strtotime($var->created_at))}}<br>
    <a href="/pinjaman/{{$var->id}}/edit"> EDIT</a><br>
    <form action="/pinjaman/{{$var->id}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
	</form>