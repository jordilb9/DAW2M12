@extends('welcome')

@section('content')


<div class="container" id="imgBlog">
    <img id="ImgCentralB" src="{{asset('assets/images/logo1.png')}}">
  @if(Session::has('Rango'))
        @if (Session::get('Rango')==2)
            <a class="btn btn-warning" id='nuevaEntrada' href="/DAW2M12/public/AñadirEntrada" role="button">
                Añadir Entrada
            </a>
        @endif
    @endif
</div>
<div id="cuerpoBlog">
        <p id='tituloB' class="text-left">Ultima Noticia</p>
        <img id="ImgCentralB" src="{{asset('assets/images/blogImg.jpg')}}">
</div>

@stop
