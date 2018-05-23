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
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Liga</a></li>
                            <li><a href="#">Equipos</a></li>
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
                            <li><a href="{{url('/AñadirPartido')}}">Añadir partido</a></li>
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
                            <li><a href="https://twitter.com/lepaladins?lang=es" class="fa fa-twitter"></a> Siguenos</li>
                            <br>
                            <li><a href="https://www.youtube.com/channel/UCiwC8PyMEef0j9xm3YW81CQ" class="fa fa-youtube"></a> Suscribete</li>
                            <br>
                            <li><a href="https://www.twitch.tv/ligadepaladinsesp" class="fa fa-twitch"></a> Suscribete</li>
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

