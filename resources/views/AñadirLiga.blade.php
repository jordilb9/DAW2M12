@extends('welcome')

@section('content')

<div class="col-md-8 col-md-offset-2">
    <br><br>
    <div class="panel panel-default" id="containerLiga">
        <div class="panel-body" >
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="AddLiga">
                {{ csrf_field() }}

                <div class="panel-heading" id="nuevaLiga"><h1>Añadir nueva liga</h1></div>
                
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <input id="temporadaLiga" type="text" class="form-control" name="temporadaLiga" placeholder="Temporada Liga"  required>
                    </div>  
                </div> 

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <input id="tituloClasificacion" type="text" class="form-control" name="tituloClasificacion" placeholder="Titulo Clasificacion"  required>
                    </div>  
                </div> 

                <div class="form-group {{isset($invalido) ? ' has-error' : '' }}" >
                    <div class="col-md-8 col-md-offset-2" id="inputFile" >
                        <input id="fileLigaClasi" name="fileLigaClasi" type="file"  class="form-control input-md" >
                        @if (isset($invalido))
                        <span class="help-block">
                            <strong>{{$invalido}}</strong>
                        </span>
                        @endif
                    </div>  
                </div>
                
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <input id="tituloJornada" type="text" class="form-control" name="tituloJornada" placeholder="Titulo Jornada"  required>
                    </div>  
                </div> 

                <div class="form-group {{isset($invalido) ? ' has-error' : '' }}" >
                    <div class="col-md-8 col-md-offset-2" id="inputFile" >
                        <input id="fileLigaJor" name="fileLigaJor" type="file"  class="form-control input-md" >
                        @if (isset($invalido))
                        <span class="help-block">
                            <strong>{{$invalido}}</strong>
                        </span>
                        @endif
                    </div>  
                </div>

                <div class="form-group">
                    <div class="col-md-0" id="botonLiga">
                        <button type="submit" class="btn btn-primary">
                            Añadir Liga
                        </button>
                        <br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@stop