@extends('welcome')

@section('content')
    <div class="container ">
    <div class="row">
        
         <div class="container" id="imgRecuperarPass">
            <img id="ImgCentralRP" src="{{asset('assets/images/logo1.png')}}">
        </div>
        
        
        <div class="col-md-6 col-md-offset-3" id="containerRecuperarPass">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="NewPassword">
                        {{ csrf_field() }}
                        
                        <div class="panel-heading " id="RecuperarPassword"><h1>Recuperar Password</h1></div>

                        <div class="form-group{{isset($invalido) ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="emailRecuperar" type="text" class="form-control" name="emailRecuperar" placeholder="E-mail"  required>
                                @if (isset($invalido))
                                        <span class="help-block">
                                            <strong>{{$invalido}}</strong>
                                        </span>
                                @endif
                            </div>  
                        </div>

                        <div class="form-group">
                            <div class="col-md-5 col-md-offset-4" id="botonRecuperarPass">
                                <button type="submit" class="btn btn-primary ">
                                    Recuperar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
    </div> 
</div>
@stop
