@extends('welcome')

@section('content')
    <div class="container ">
    <div class="row">
        <div class="col-md-4 ">
            <br><br>
            <div class="panel panel-default">
                

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="Login">
                        {{ csrf_field() }}
                        
                        <div class="panel-heading " id="inciarSesion"><h1>Iniciar Sesión</h1></div>

                        <div class="form-group{{isset($invalido) ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="user" type="text" class="form-control" name="user" placeholder="Username"  required>
                            </div>  
                        </div>

                        <div class="form-group{{isset($invalido) ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                                   @if (isset($invalido))
                                        <span class="help-block">
                                            <strong>{{$invalido}}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-0" id="botonLogRecu">
                                <button type="submit" class="btn btn-primary ">
                                    Login
                                </button>
                                <br>

                                <a class="btn btn-link " href="">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-md-8 ">
            <br><br>
            <div class="panel panel-default">
                

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="Register">
                        {{ csrf_field() }}
                        
                        <div class="panel-heading" id="Registro"><h1>Registro</h1></div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre"  required>
                            </div>  
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" placeholder="Apellidos"  required>
                            </div>  
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-2">
                                <input id="edad" type="number" class="form-control" name="edad" min="5" max="99" step="1" placeholder="Edad"  required>
                            </div>  
                        </div>
                        
                         <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                               <select id="nacionalidad" class="form-control" name="nacionalidad" required>
                                    <option value=”” disabled selected>Nacionalidad</option>
                                    <option value="Español"> Español </option>
                                    <option value="Frances"> Frances </option>
                                    <option value="Portugues"> Portugues </option>
                                    <option value="Aleman"> Aleman </option>
                               </select>
                            </div>  
                        </div>
 
                        <div class="form-group{{isset($RegistroInvalido) ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="email" type="text" class="form-control" name="email" placeholder="E-Mail"  required>
                            </div>  
                        </div>
                        
                        <div class="form-group{{isset($RegistroInvalido) ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="nickPaladins" type="text" class="form-control" name="nickPaladins" placeholder="Nick Paladins"  required>
                            </div>  
                        </div>
                        
                        <div class="form-group{{isset($RegistroInvalido) ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="userReg" type="text" class="form-control" name="user" placeholder="Username"  required>
                            </div>  
                        </div>

                        <div class="form-group{{isset($RegistroInvalido) ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                                   @if (isset($RegistroInvalido))
                                        <span class="help-block">
                                            <strong>{{$RegistroInvalido}}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="g-recaptcha col-md-8 col-md-offset-2
                             " data-sitekey="6LdiBFsUAAAAAFdUVDkoictOwRlGHWmNUBH1s462"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-0" id="botonRegistro">
                                <button type="submit" class="btn btn-success">
                                    Registrarse
                                </button>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
        <div class="col-md-4">
                  <img id="ImgLoginRegister" src="{{asset('assets/images/header-grohk.png')}}">
        </div>

    </div> 
</div>
@stop