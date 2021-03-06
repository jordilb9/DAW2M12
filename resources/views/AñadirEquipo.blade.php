@extends('welcome')

@section('content')

<div class="col-md-8 col-md-offset-2">
    <br><br>
    <div class="panel panel-default" id="containerAddEquipo">
        <div class="panel-body">
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="NuevoEquipo">
                {{ csrf_field() }}

                <div class="panel-heading" id="Registro"><h1>Añadir equipo</h1></div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Equipo"  required>
                    </div>  
                </div> 
                
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <input id="siglas" type="text" class="form-control" name="siglas" placeholder="Siglas"  required>
                    </div>  
                </div> 
                
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <textarea id="description" name="descriptionEquipo" type="text" class="form-control" placeholder="Descripcio..." rows="6" ></textarea>
                    </div>  
                </div>
                
                <div class="form-group {{isset($invalido) ? ' has-error' : '' }}" >
                    <div class="col-md-8 col-md-offset-2" id="inputFile" >
                        <input id="fileBlog" name="fileBlog" type="file"  class="form-control input-md" >
                        @if (isset($invalido))
                        <span class="help-block">
                            <strong>{{$invalido}}</strong>
                        </span>
                        @endif
                    </div>  
                </div>
                
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <input id="capitan" type="text" class="form-control" name="capitan" placeholder="Capitan"  required>
                    </div>  
                </div> 
                
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <input id="j1" type="text" class="form-control" name="j1" placeholder="Jugador 2"  required>
                    </div>  
                </div> 
                
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <input id="j2" type="text" class="form-control" name="j2" placeholder="Jugador 3"  required>
                    </div>  
                </div> 
                
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <input id="j3" type="text" class="form-control" name="j3" placeholder="Jugador 4"  required>
                    </div>  
                </div> 
                
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <input id="j4" type="text" class="form-control" name="j4" placeholder="Jugador 5"  required>
                    </div>  
                </div> 
                
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <input id="j5" type="text" class="form-control" name="j5" placeholder="Jugador 6"  required>
                    </div>  
                </div> 
                
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <input id="j6" type="text" class="form-control" name="j6" placeholder="Jugador 7"  required>
                    </div>  
                </div> 

                <div class="form-group">
                    <div class="col-md-0" id="botonRegistro">
                        <button type="submit" class="btn btn-primary">
                            Añadir Equipo
                        </button>
                        <br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop