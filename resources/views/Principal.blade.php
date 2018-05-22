@extends('welcome')

@section('content')

<div class="container" id="imgTextP">
    <img id="ImgCentralP" src="{{asset('assets/images/logo.jpg')}}">
    <h1 id="textPrincipal">Become a Champion of the Realm</h1>
</div>
<div class="panel-body" id="principal">
    <section class="section-white" id="slide">
      <div class="container ">

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
              <div class="carousel-caption">
                <h2>Twitch</h2>
              </div>
            </div>
            <div class="item">
              <img id="ImgCarousel-2" src="{{asset('assets/images/facebook.jpg')}}">
              <div class="carousel-caption">
                <h2>Facebook</h2>
              </div>
            </div>
            <div class="item">
              <img id="ImgCarousel-3" src="{{asset('assets/images/liga.png')}}">
              <div class="carousel-caption">
                <h2>Liga</h2>
              </div>
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

      </div>
    </section>
</div>





<!--    <div class="container ">
    <div class="row">
        <div class="col-md-1 ">
            <div class="col-md-4 col-md-offset-2">
               <img id="ImgCentralP" src="{{asset('assets/images/logo.jpg')}}">
               <h1 id="contPrin">Become a Champion of the Realm</h1>
                <div class="panel-body" id="principal">
                    <section class="section-white" id="slide">
                      <div class="container ">

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                           Indicators 
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                          </ol>

                           Wrapper for slides 
                          <div class="carousel-inner">
                            <div class="item active">
                                <img id="ImgCarousel-1" src="{{asset('assets/images/twitch.jpg')}}">
                              <div class="carousel-caption">
                                <h2>Twitch</h2>
                              </div>
                            </div>
                            <div class="item">
                              <img id="ImgCarousel-2" src="{{asset('assets/images/facebook.jpg')}}">
                              <div class="carousel-caption">
                                <h2>Facebook</h2>
                              </div>
                            </div>
                            <div class="item">
                              <img id="ImgCarousel-3" src="{{asset('assets/images/liga.png')}}">
                              <div class="carousel-caption">
                                <h2>Liga</h2>
                              </div>
                            </div>
                          </div>

                           Controls 
                          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                          </a>
                        </div>

                      </div>
                    </section>
                </div>
            </div>
        </div>
    </div> 
</div>-->
@stop
