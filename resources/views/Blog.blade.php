@extends('welcome')

@section('content')


<div class="container" id="imgBlog">
    <img id="ImgCentralB" src="{{asset('assets/images/logo1.png')}}">
  @if(Session::has('Rango'))
        @if (Session::get('Rango')==2)
            <a class="btn btn-warning" id='nuevaEntrada' href="{{url('/AñadirBlog')}}" role="button">
                Añadir Entrada
            </a>
        @endif
    @endif
</div>
    @foreach( $resultado as $select )
        <div id="cuerpoBlog">
                <p id='tituloB' class="text-left">&nbsp; {{$select->Titulo}}</p>
                <img id="ImgNoticiaB" src=" data:image/jpg; base64 ,{{base64_encode($select->Imagen)}}">
                <p id="descripcionBlog">{{$select->Descripcion}}</p>
        </div>
    @endforeach
@stop
