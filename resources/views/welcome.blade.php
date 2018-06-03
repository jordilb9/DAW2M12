<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="{{ url('js/jquery.min.js')}}"></script>
        <script src="{{ url('js/bootstrap.min.js')}}"></script>
        <script src="{{url('js/md5.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <link href="{{ url('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .navbar-brand {
                padding:0px;
            }
            .navbar-brand>img {
                height: 100%;
                width: auto;
            }

            #logo{
                height: 5,6vh;
                width: 10vh
            }

            #ImgLoginRegister{
                height: 50vh;
                width: 40vh;
                margin-top:-350px;
                margin-left:-100px;
            }

            .navbar-alignit .navbar-header {
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                transform-style: preserve-3d;
                height: 50px;
            }
            .navbar-alignit .navbar-brand {
                top: 50%;
                display: block;
                position: relative;
                height: auto;
                transform: translate(0,-50%);
                margin-right: 15px;
                margin-left: 15px;
            }





            .navbar-nav>li>.dropdown-menu {
                z-index: 9999;
            }

            body {
                font-family: "Arial";
            }


            select:required:invalid {
                color: #999;
            }
            option[value=””][disabled] {
                display: none;
            }
            option {
                color: #000;
            }

            section {
                padding: 60px 0;
            }

            section .section-title {
                text-align: center;
                color: #007b5e;
                margin-bottom: 50px;
                text-transform: uppercase;
            }
            /*Footer*/
            footer{
                color: white;
                width: 100%;
            }
            footer a{
                color: #bfffff;
            }
            footer a:hover{
                color: white;
            }

            .footer-bottom{
                background: #494848;
                padding: 2em;
            }
            .footer-middle{
                background: #767473;
                padding-top: 2em;
                color: white;
            }

            /* Style all font awesome icons */
            .fa {
                padding: 14px;
                font-size: 25px;
                width: 50px;
                height: 50px;
                text-align: center;
                text-decoration: none;
                border-radius: 50%;
            }

            /* Twitter */
            .fa-twitter {
                background: #55ACEE;
                color: white;
            }
            /* Youtube */
            .fa-youtube {
                background: #bb0000;
                color: white;
            }

            /* Twitch */
            .fa-twitch {
                background: purple;
                color: white;
            }   

            /*Fin footer*/

            /*Sidebar*/
            .sidenav {
                height: 100%;
                width: 160px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #111;
                overflow-x: hidden;
                padding-top: 20px;
            }

            .sidenav a {
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
            }
            /*Fin Sidebar*/

            .img-responsive,
            .thumbnail > img,
            .thumbnail a > img,
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                display: block;
                width: 100%;
                height: auto;
            }

            /* ------------------- Carousel Styling ------------------- */

            .carousel-inner {
                border-radius: 15px;
            }

            .carousel-caption {
                background-color: rgba(0,0,0,.5);
                position: absolute;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 10;
                padding: 0 0 10px 25px;
                color: #fff;
                text-align: left;
            }

            .carousel-indicators {
                position: absolute;
                bottom: 0;
                right: 0;
                left: 0;
                width: 100%;
                z-index: 15;
                margin: 0;
                padding: 0 25px 25px 0;
                text-align: center;
            }

            .carousel-control.left,
            .carousel-control.right {
                background-image: none;
            }

            #slide{
                text-align: center;
            }


            /* ------------------- Section Styling - Not needed for carousel styling ------------------- */

            .section-white {
                padding: 10px 0;
            }

            .section-white {
                background-color: #fff;
                color: #555;
            }

            @media screen and (min-width: 768px) {

                .section-white {
                    padding: 1.5em 0;
                }

            }

            @media screen and (min-width: 992px) {

                .container {
                    max-width: 930px;
                }

            }

            #ImgCarousel-1{
                width: 100%;
                height: auto;
            }
            #ImgCarousel-2{
                width: 100%;
                height: auto;
            }
            #ImgCarousel-3{
                width: 100%;
                height: auto;
            }


            /*Centrar contenido*/
            #inciarSesion,#Registro,#botonLogRecu,#botonRegistro,#imgTextP,#imgBlog{
                text-align: center;
            }

            #nuevaEntrada{
                position:absolute;
                top:16%;
                right: 15%;
            }

            #ImgCentralP{
                width: 50%;
                height: auto;
            }

            #ImgCentralB{
                width: 50%;
                height: auto;
            }
            
            #ImgCentralLR{
                width: 50%;
                height: auto;
            }

            #carousel-example-generic{
                margin:5%;
                text-align: center;
            }

            /* Añadir Partido*/
            .featurette {
                display: table;
                width: 100%;
                height: 30%; /* set a pixel height and then remove the body,html height */
                vertical-align: middle;

            }
            .featurette-inner {
                display: table-cell;
                vertical-align: middle;
            }
            .featurette .search {
                padding: 3%;
                max-width: 980px; /*max width of search*/
                margin: 0 auto;
            }
            .no-margin-top {
                margin-top: 0
            }


            /* ------ form-control-lg */
            .form-control-lg {
                min-height: 46px;
                border-radius: 6px;
                font-size: 18px;
                line-height: normal;
            }


            /* ------ disjointed form group custom */
            .featurette .search.has-button .btn {
                margin-top: 5px;
                width: 100%;
            }
            @media (min-width:480px) { 
                .featurette .search.has-button .form-group {
                    position: relative;
                    padding-right: 99px; /*space for button*/
                }
                .featurette .search.has-button .btn {
                    position: absolute;
                    top: 0;
                    right: 0;
                    width: auto;
                    margin: 0;
                }
            }

            /*Blog*/
            
            #imgBlog{
                text-align: center;
            }
            
            #cuerpoBlog{
                position: relative;
                margin-top: -13%;
                margin-bottom: 13%;
                background-color:#f58484;
                width: 100%;
                height: auto;
                text-align: center;
            }

            #tituloB{
                color:yellow;
                font-size:30px;   
                padding-top: 10px;
            }
            
            #fileBlog{    
             padding-bottom:40px;  
             padding-top:6px;
            }
            
            #descripcionBlog{
                padding-bottom: 10%;
                padding-top: 2%;
                padding-left: 10%;
                padding-right: 10%;
                color:black;
            }
            
            #ImgNoticiaB{
               width: 80%;
               height: 50%;
            }
            
            #containerAddBlog{
               margin-top:1%;
               margin-bottom: 10%;
            }
            
            /*LoginRegistro*/
    
            #imgLoginRegister{
                text-align: center;
                margin-bottom:-50px;
            }
            
            #exampleModalLabel{
                text-align: center;
            }
            /*RecuperarPass*/
            #imgRecuperarPass{
                text-align: center;
            }
            
            #ImgCentralRP{
                 width: 50%;
                height: auto;
            }
            
            #RecuperarPassword{
                text-align: center;
            }
            
            #containerRecuperarPass{
               margin-top:-10px;
               margin-bottom: 55px;
            }
            
            /*Liga*/
            #imgLiga{
                text-align: center;
            }
            
            #ImgCentralL{
                width: 50%;
                height: auto;
            }
            
            #cuerpoLiga{
                position: relative;
                margin-top: -13%;
                margin-bottom: 5%;
                padding-bottom: 5%;
                background-color:#f58484;
                width: 100%;
                height: auto;
                text-align: center;
            }
            
            #tituloCL,#tituloJL{
                color:yellow;
                font-size:30px;   
                padding-top: 10px;
            }
            
            #ImgCL,#ImgJL{
               width: 80%;
               height: 50%;
            }
            
            #nuevaLiga,#botonLiga{
                text-align: center;
            }
            
            #fileLigaClasi,#fileLigaJor{    
             padding-bottom:40px;  
             padding-top:6px;
            }

            #containerLiga{
               margin-top:1%;
               margin-bottom: 10%;
            }
            
            /*Equipo*/
            #containerAddEquipo{
               margin-top:-11px;
               margin-bottom: 50px;
            }
            
            #imgPEquipo{
                text-align: center;
            }
            
            #ImgCentralE{
                width: 50%;
                height: auto;
            }
            
            #cuerpoEquipo{
                position: relative;
                margin-top: -13%;
                margin-bottom: 5%;
                padding-bottom: 5%;
                background-color:#f58484;
                width: 100%;
                height: auto;
                text-align: center;
            }
         
            #nombreEquipo{
                color:yellow;
                font-size:50px;   
                padding-top: 20px;
                margin-left: -20px;
                text-align: center;
            }
            
            #imagenEquipo{
                width: 30%;
                height: auto;
                float:left;
                padding-left:50px;
                margin-top:-50px;
            }
            
            #descripcionEquipo{
                padding-bottom: 10%;
                padding-top: 2%;
                padding-left: 10%;
                padding-right: 10%;
                color:black;
            }
            
            #userLogo,#fotoUser{
                width: 100%;
                height: auto;
            }
            
            #userEquipo{
                float:left;
                width: 10%;
                height: auto;
                margin-left: 20px;
                margin-right: 20px;
            }
            
            #allUserTeam{
                text-align: center;
                width: 100%;
                height: auto;
                margin-left: 14%;
            }
            
            /*Actualizar Personaje*/
            
            #actualizarPersonaje{
                margin-bottom: 57%;
            }
            
            /*Añadir Partido*/
            #addPartido{
                margin-bottom: 44%;
            }

            /*Fin añadir Partido*/
        </style>
    </head>

    <body>
        @include('partials.navbar')
        <div  class="container main">
            @yield('content')
        </div>
        @include('partials.footer')
    </body>
</html>

