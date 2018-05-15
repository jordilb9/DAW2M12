<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar4">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img id="logo" src="{{asset('assets/images/logo.jpg')}}"></a>
        
      </div>
      <div id="navbar4" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Blog</a></li>
          <li><a href="#">Liga</a></li>
          <li><a href="#">Equipos</a></li>
          <li><a href="#">Personajes</a></li>  
        </ul>
    @if( Auth::check() )
        <ul class="nav navbar-nav navbar-right">

            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                                                    Cerrar sesión
                </a>
                                            <form id="logout-form" action="#" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            </li>
        </ul>
    @endif
		
    @if(!Auth::check())
        <ul class="nav navbar-nav navbar-right">
                <li class="nav navbar-nav navbar-right"><a href="#">Login/Register</a></li>
        </ul>
    @endif  

          
      </div>
<!--      /.nav-collapse -->
    </div>
<!--    /.container-fluid -->
  </nav>
