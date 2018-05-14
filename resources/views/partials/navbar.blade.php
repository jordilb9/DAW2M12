<nav class="navbar navbar-inverse navbar-static-top" id="topNavBar">
    
    
    <a class="navbar-left" href="#"><img id="logo" src="{{asset('assets/images/logo.jpg')}}"></a>
    <!--
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    -->
    <div id="navbar" class="navbar-collapse collapse">
        
        <ul class="nav navbar-nav">
            
            <li>
                <!-- class="active" -->
                <a class="nav-link" href="{{url('/abrirCarpeta/public')}}">Blog<span class="sr-only">(current)</span></a>
            </li>
            <li>
                <a href="{{url('/editarPerfil/')}}">Liga</a>
            </li>
            <li>
                <a href="{{url('/CU_51/')}}">Equipos</a>
            </li>
            <li>
                <a href="{{url('/CU_51/')}}">Personajes</a>
            </li>
            <li></li>
        </ul>
        <!--
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" placeholder="Search" aria-label="Search" type="text">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
        -->
        <form class="navbar-form navbar-right" method="GET" action="{{url('/resultadoBusqueda/')}}" style="margin-right: 0px;">
            <a href="">Login/Registrarse</a>
            
        </form>
    </div>
</nav>


<script>
    <!--
            Posar funció window.width per a obrir o tancar la navbar
            Evitar que el main es "caigui"
            -- >
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>