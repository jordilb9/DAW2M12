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
        <link href="{{ url('css/estiloWeb.css')}}" rel="stylesheet" type="text/css">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
        @include('partials.navbar')
<!--        @if(Session::has('Rango'))
            @if (Session::get('Rango')==2)
                    @include('partials.sidebar')
             @endif
         @endif-->
            <div  class="container main" id="mainPrincipal">
                @yield('content')
            </div>
        @include('partials.footer')
    </body>
</html>

