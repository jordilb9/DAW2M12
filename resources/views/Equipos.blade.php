@extends('welcome')

@section('content')


<div class="container" id="imgBlog">
    <img id="ImgCentralB" src="{{asset('assets/images/logo1.png')}}">
  @if(Session::has('Rango'))
        @if (Session::get('Rango')==2)
            <a class="btn btn-warning" id='nuevaEntrada' href="{{url('/AñadirEquipo')}}" role="button">
                Añadir Equipo
            </a>
        @endif
    @endif
</div>
@stop