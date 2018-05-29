@extends('welcome')

@section('content')


<div class="container" id="imgBlog">
    <img id="ImgCentralB" src="{{asset('assets/images/logo1.png')}}">

</div>

<div id="cuerpoBlog">
    <div class="row">
        <div>
            @foreach( $equipo as $algo )
            @if( $algo->IdEquipo == $id )
            <h2 style="color:yellow;min-height: 75px; margin:10px 0 10px 0; font-size: 90px;">
                {{ $algo->Nombre}}

            </h2>
            <img src=" data:image/jpg; base64 ,{{base64_encode($algo->Logo)}}" style="height: auto; width: 20%; float: left"/>
            <p>{{$algo->Descripcion}}</p>

            @endif
            @endforeach
        </div>

        <div>
            @foreach( $resultado as $select )
            @if( $select->Equipo == $id )
            <p>{{$select->PaladinsNick}}</p>
            @if( $select->Foto == null )
            <img src="{{asset('assets/images/userlogo.png')}}" style="height: auto; width: 20%"/>
            @else
            <img src=" data:image/jpg; base64 ,{{base64_encode($select->Foto)}}" style="height: auto; width: 100%"/>
            @endif
            @endif
            @endforeach
        </div>


        <!--
        <div class="col-xs-6 col-sm-4 col-md-3 text-center" style="padding: 20px">
            <a href="{{ url('/CargaEquipos/'.$select->IdEquipo)}}" style="text-decoration: none">
                <img id="ImgNoticiaB" src=" data:image/jpg; base64 ,{{base64_encode($select->Logo)}}" style="height: auto; width: 100%"/>
                <h4 style="color:yellow; min-height: 45px; margin:5px 0 10px 0">
                    {{$select->Nombre}}
                </h4>
            </a>
        </div>-->


    </div>
</div>
@stop
