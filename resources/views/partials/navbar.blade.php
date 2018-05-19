<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar4">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><img id="logo" src="{{asset('assets/images/logo.jpg')}}"></a>

        </div>
        <div id="navbar4" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Blog</a></li>
                <li><a href="#">Liga</a></li>
                <li><a href="#">Equipos</a></li>
                <li><a href="#">Personajes</a></li>  
            </ul>
            
            {{session_start()}}

            @if($_SESSION!=null )
            <ul class="nav navbar-nav navbar-right">
                <li class="nav navbar-nav navbar-right"><a href="{{url('/CerrarSesion/')}}">Cerrar sesión</a></li>
            </ul>
            @endif

            @if($_SESSION==null)
            <ul class="nav navbar-nav navbar-right">
                <li class="nav navbar-nav navbar-right"><a href="{{url('/LoginRegister/')}}">Login/Register</a></li>
            </ul>
            @endif  

        </div>
        <!--      /.nav-collapse -->
    </div>
    <!--    /.container-fluid -->
</nav>


