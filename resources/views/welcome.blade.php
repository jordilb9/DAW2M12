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
        </style>
    </head>
    <body>
        @include('partials.navbar')
        <div  class="container main">
            @yield('content')
        </div>

    </body>
</html>
