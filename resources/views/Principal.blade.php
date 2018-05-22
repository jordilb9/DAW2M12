@extends('welcome')

@section('content')

<div class="container" id="imgTextP">
    <img id="ImgCentralP" src="{{asset('assets/images/logo1.png')}}">
    <h1>Become a Champion of the Realm</h1>
    <h4>Mememe memem ememem emememe m  e me m ebamsdfm k
        asdjfasdkfjah asdifhiuahsdf hasd asdfh uah sdhl al asdk fjahsdkf ahkf</h4>
    <a class="btn btn-warning" href="/DAW2M12/public/LoginRegister" role="button">
        Login
    </a>
</div>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!--                           Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!--                           Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img id="ImgCarousel-1" src="{{asset('assets/images/twitch.jpg')}}">
        </div>
        <div class="item">
            <img id="ImgCarousel-2" src="{{asset('assets/images/facebook.jpg')}}">
        </div>
        <div class="item">
            <img id="ImgCarousel-3" src="{{asset('assets/images/liga.png')}}">
        </div>
    </div>

    <!--                           Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
@stop
