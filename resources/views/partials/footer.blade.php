<footer class="mainfooter" role="contentinfo">

    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <div class="col-7 col-md-4">
                    <!--Column1-->
                    <div class="footer-pad">
                        <h4>Acceso rápido</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{url('/')}}">Menú Principal</a></li>
                            <li><a href="{{url('/CargarBlog')}}">Blog</a></li>
                            <li><a href="{{url('/CargarLiga')}}">Liga</a></li>
                            <li><a href="{{url('/CargarEquipos')}}">Equipos</a></li>
                            <li><a href="#">Personajes</a></li>
                        </ul>
                    </div>
                </div>
                @if(Session::has('Rango'))
                @if (Session::get('Rango')==2)
                <div class="col-7 col-md-4">
                    <div class="footer-pad">
                        <h4>Panel de administrador</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{url('/AddPartido')}}">Añadir partido</a></li>
                            <li><a href="{{url('/AñadirBlog')}}">Añadir Blog</a></li>
                            <li><a href="{{url('/ActulizaPersonajes')}}">Actualiza personajes</a></li>
                            <li><a href="{{url('/AñadirEquipo')}}">Añadir Equipo</a></li>
                            <li><a href="{{url('/AñadirLiga')}}">Añadir Liga</a></li>
                        </ul>
                    </div>
                </div>
                @endif
                @endif

                <div class="col-4 col-md-4">
                    <!--Column1-->
                    <div class="footer-pad">
                        <h4>Popular Departments</h4>
                        <ul class="list-unstyled ">
                            <li><a href="https://twitter.com/lepaladins?lang=es" class="fa fa-twitter  fa-2x"></a> Siguenos</li>
                            <br>
                            <li><a href="https://www.youtube.com/channel/UCiwC8PyMEef0j9xm3YW81CQ" class="fa fa-youtube  fa-2x"></a> Suscribete</li>
                            <br>
                            <li><a href="https://www.twitch.tv/ligadepaladinsesp" class="fa fa-twitch fa-2x"></a> Suscribete</li>
                            <li>
                                <a href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--Footer Bottom-->
                    <p class="text-center">&copy; Copyright 2018 - Spain.  All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

