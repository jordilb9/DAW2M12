@extends('welcome')

@section('content')
 
        <div class="col-md-8 col-md-offset-2">
            <br><br>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="NuevoBlog">
                        {{ csrf_field() }}
                        
                        <div class="panel-heading" id="Registro"><h1>Añadir entrada en el blog</h1></div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="titulo" type="text" class="form-control" name="titulo" placeholder="Titulo"  required>
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
                                <textarea id="description" name="descriptionBlog" type="text" class="form-control" placeholder="descripcio..." rows="6" ></textarea>
                            </div>  
                        </div>

                        <div class="form-group">
                            <div class="col-md-0" id="botonRegistro">
                                <button type="submit" class="btn btn-primary">
                                    Añadir Blog
                                </button>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div> 
</div>
@stop