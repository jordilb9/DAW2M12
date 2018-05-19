<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="{{ url('js/jquery.min.js')}}"></script>
        <script src="{{ url('js/bootstrap.min.js')}}"></script>
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
            /*            .example4 .navbar-brand>img {
                            padding: 7px 14px;
                        }*/

            #logo{
                height: 5,6vh;
                width: 10vh
            }

            #ImgLoginRegister{
                height: 50vh;
                width: 40vh;
                margin-top:-240px;
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
            
            footer{
                color: white;
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

            /* Add a hover effect if you want */
            .fa:hover {
                opacity: 0.7;
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
