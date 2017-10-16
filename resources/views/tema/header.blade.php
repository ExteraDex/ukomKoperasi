<!--Header-->
<header>
    <nav class="primarycolor">
     <div class="container-fluid">
      <a href="#!" class="size size-2 left">KOPERASI</a>
      <ul id="nav-mobile2" class="right">
        <!-- SEARCH INPUT MD Up  -->
        <li class="hidden-xs">
           <form class="navbar-form navbar-left" material="off" action="{{ url('query') }}" method="GET">  
            <div class="form-group">  
             <input type="text" name="q" class="form-control" placeholder="Search">
            </div>  
            <button type="submit" class="btn2 btn-default"><i class="material-icons">search</i></button>  
            </form>
        </li>
        <!-- SEARCH INPUT MD Down  -->
        <li class="search_mini visible-xs">
            <a class="btn-search" href="#!"><i class="material-icons">search</i></a>
            <div class="form-search row">
            <form action="{{ url('query') }}" method="GET" material="off">
                <div class="form-group">  
                 <input type="text" name="q" name="" class="form-control" placeholder="Search...">  
                </div>  
            </form>
            </div>
            <script>
            $('.btn-search').click(function(){
                $('.form-search').toggle('fast'); 
            });
            </script>
        </li>
        <li class="hidden-sm hidden-xs">
            <a class="dropdown-button hover" href="#!" data-activates="acc-setting" hover="true">
                <img src="{{asset('')}}img/profil/{{Auth::user()->image}}" alt="" class="acc-dp">
                <span class="acc-title">{{Auth::user()->name}}</span>
                <i class="material-icons tiny acc-row">arrow_drop_down</i>
            </a>
            <!-- Dropdown Structure -->
            <ul id="acc-setting" class="dropdown-content">
              <li><a href="/profile"><i class="material-icons">settings</i>Edit Profile</a></li>
              @if(Auth::user()->role == 'admin')
              <li><a href="#!"><i class="material-icons">build</i>Account Manager</a></li>
              @endif
              <li class="divider"></li>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="material-icons">power_settings_new</i>LogOut</a></li>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
            </ul>
            <script>
            $(".dropdown-button").dropdown({
                  inDuration: 300,
                  outDuration: 300,
                  constrainWidth: true, // Does not change width of dropdown to that of the activator
                  hover: true, // Activate on hover
            });
            </script>
        </li>
        <li>
            <a href="#" class="button-subnav show-on-large show-on-small"><i class="material-icons tombol-slidenavbar">menu</i></a>
        </li>
      </ul><!--/#nav-mobile2-->
    </div><!--/.container-->
  </nav>
  <div class="subnav">
      <ul>
          <li><a href="/home">Home</a></li>
          <li><a href="/anggota">Anggota</a></li>
          <li><a href="/simpanan">Simpanan</a></li>
          <li><a href="/petugas">Petugas Koperasi</a></li>
          <li><a href="/angsuran">Angsuran</a></li>
          <li><a href="/detail">Detail</a></li>
          <li><a href="/kategori">Kategori</a></li>
          <li><a href="/pinjaman">Pinjaman</a></li>
      </ul>
      <script>
            $('.button-subnav').click(function(){
                $('.subnav').toggle('fast'); 
            });
      </script>
  </div><!--/.subnav-->
</header>
    <!--End Header-->