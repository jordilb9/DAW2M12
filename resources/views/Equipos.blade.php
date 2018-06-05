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

<div id="cuerpoBlog">
    <div class="row">
        @foreach( $resultado as $select )
        <div class="col-xs-6 col-sm-4 col-md-3 text-center" style="padding: 20px">
            <a href="{{ url('/CargaEquipos/'.$select->IdEquipo)}}" style="text-decoration: none">
                <img id="ImgNoticiaB" src=" data:image/png; base64 ,{{base64_encode($select->Logo)}}" style="height: auto; width: 100%"/>
                <h4 style="color:yellow; min-height: 45px; margin:5px 0 10px 0">
                    {{$select->Nombre}}
                </h4>
            </a>
        </div>
        @endforeach
    </div>
</div>
@stop
