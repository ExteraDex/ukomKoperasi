<!DOCTYPE html>
<html>
<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<script src="{{ asset('js/this.js')}}"></script>
<style>
	th{
		text-align: center;
	}
</style>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Koperasi</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
             <li class="active"><a href="/anggota">Anggota</a></li>
              <li><a href="/simpanan">Simpanan</a></li>
              <li><a href="/petugas">Petugas Koperasi</a></li>
              <li><a href="/angsuran">Angsuran</a></li>
              <li><a href="/detail">Detail</a></li>
              <li><a href="/kategori">Kategori</a></li>
              <li><a href="/pinjaman">Pinjaman</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
<div class="container">
	@yield('content')
</div>
</body>
</html>