@extends('welcome')

@section('content')


<div class="container" id="imgPEquipo">
    <img id="ImgCentralE" src="{{asset('assets/images/logo1.png')}}">

</div>

<div id="cuerpoEquipo">
    <div class="row">
        <div>
            @foreach( $equipo as $algo )
            @if( $algo->IdEquipo == $id )
            <p id="nombreEquipo">
                {{ $algo->Nombre}}
            </p>
            <img id="imagenEquipo" src=" data:image/png; base64 ,{{base64_encode($algo->Logo)}}" />
            <p id="descripcionEquipo">{{$algo->Descripcion}}</p>

            @endif
            @endforeach
        </div>

        <div id="allUserTeam">
            @foreach( $resultado as $select )
            <div id="userEquipo">
            @if( $select->Equipo == $id )
            <p>{{$select->PaladinsNick}}</p>
            @if( $select->Foto == null )
            <img id="userLogo" src="{{asset('assets/images/userlogo.png')}}"/>
            @else
            <img id="fotoUser" src=" data:image/jpg; base64 ,{{base64_encode($select->Foto)}}"/>
            @endif
            @endif
            </div>
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
