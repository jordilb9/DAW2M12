@extends('welcome')

@section('content')


<div class="container" id="imgLiga">
    <img id="ImgCentralL" src="{{asset('assets/images/logo1.png')}}">
</div>

@foreach( $resultado as $select )
    <div id="cuerpoLiga">
        <div id="cuerpoClasificacion">
                <p id='tituloCL' class="text-left">&nbsp; {{$select->TituloClasificacion}}</p>
                <img id="ImgCL" src="data:image/jpg; base64 ,{{base64_encode($select->ImagenClasificacion)}}">
        </div>

        <div id="cuerpoJornada">
                <p id='tituloJL' class="text-left">&nbsp; {{$select->TituloJornada}}</p>
                <img id="ImgJL" src="data:image/jpg; base64 ,{{base64_encode($select->ImagenJornada)}}">
        </div>
    </div>
@endforeach
@stop
