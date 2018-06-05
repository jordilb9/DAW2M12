@extends('welcome')

@section('content')


<div class="container " id="cuerpoLoginRegistro">
    <div class="row">
        <div class="container" id="imgLoginRegister">
            <img id="ImgCentralLR" src="{{asset('assets/images/logo1.png')}}">
        </div>

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

                                <a class="btn btn-link " href="{{url('/RecuperarPass')}}">
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
                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="Register">
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

                        <div class="form-group{{isset($RegistroInvalidoCorreo) ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="email" type="text" class="form-control" name="email" placeholder="E-Mail"  required>
                                @if (isset($RegistroInvalidoCorreo))
                                <span class="help-block">
                                    <strong>{{$RegistroInvalidoCorreo}}</strong>
                                </span>
                                @endif
                            </div>  
                        </div>

                        <div class="form-group{{isset($RegistroInvalidoNick) ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="nickPaladins" type="text" class="form-control" name="nickPaladins" placeholder="Nick Paladins"  required>
                                @if (isset($RegistroInvalidoNick))
                                <span class="help-block">
                                    <strong>{{$RegistroInvalidoNick}}</strong>
                                </span>
                                @endif
                            </div>  
                        </div>

                        <div class="form-group {{isset($invalido) ? ' has-error' : '' }}" >
                            <div class="col-md-8 col-md-offset-2" id="inputFile" >
                                <input id="fileBlog" name="fileRegister" type="file"  class="form-control input-md" >
                                @if (isset($invalido))
                                <span class="help-block">
                                    <strong>{{$invalido}}</strong>
                                </span>
                                @endif
                            </div>  
                        </div>

                        <div class="form-group{{isset($RegistroInvalidoUser) ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="userReg" type="text" class="form-control" name="user" placeholder="Username"  required>
                                @if (isset($RegistroInvalidoUser))
                                <span class="help-block">
                                    <strong>{{$RegistroInvalidoUser}}</strong>
                                </span>
                                @endif
                            </div>  
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <input id="password" type="checkbox"  name="checkbox" required> He leido los <a href="#" data-toggle="modal" data-target="#TerminosModal">terminos</a> y los acepto
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="g-recaptcha col-md-8 col-md-offset-2" data-sitekey="6LdiBFsUAAAAAFdUVDkoictOwRlGHWmNUBH1s462"></div>
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

        <div class="col-md-0">
            <img id="ImgLoginRegister" src="{{asset('assets/images/header-grohk.png')}}">
        </div>

    </div> 
</div>


<div class="modal fade" id="TerminosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" id="exampleModalLabel">Terminos y condiciones de uso</h3>
            </div>
            <div class="modal-body">
                <h4>1. Introducción</h4>

                <p> Las presentes condiciones generales de uso de la página web, regulan los términos y condiciones de acceso y uso de www.direcciónweb.com,
                    propiedad de (indicar el nombre de la empresa o profesional propietario de el portal), con domicilio en (indicar) y con Código de Identificación Fiscal número (indicar),
                    en adelante, «la Empresa», que el usuario del Portal deberá de leer y aceptar para usar todos los servicios e información que se facilitan desde el portal. 
                    El mero acceso y/o utilización del portal, de todos o parte de sus contenidos y/o servicios significa la plena aceptación de las presentes condiciones generales de uso. 
                </p>

                <h4> 2. Condiciones de uso</h4>

                <p>Las presentes condiciones generales de uso del portal regulan el acceso y la utilización del portal,
                    incluyendo los contenidos y los servicios puestos a disposición de los usuarios en y/o a través del portal,
                    bien por el portal, bien por sus usuarios, bien por terceros. No obstante, 
                    el acceso y la utilización de ciertos contenidos y/o servicios puede encontrarse sometido a determinadas condiciones específicas.
                </p>

                <h4> 3.   Modificaciones</h4>

                <p> La empresa se reserva la facultad de modificar en cualquier momento las condiciones generales de uso del portal.
                    En todo caso, se recomienda que consulte periódicamente los presentes términos de uso del portal, ya que pueden ser modificados.
                </p>

                <h4> 4. Obligaciones del Usuario</h4>

                <p> El usuario deberá respetar en todo momento los términos y condiciones establecidos en las presentes condiciones generales de uso del portal. 
                    De forma expresa el usuario manifiesta que utilizará el portal de forma diligente y asumiendo cualquier responsabilidad que pudiera derivarse del incumplimiento de las normas.

                    Así mismo, el usuario no podrá utilizar el portal para transmitir, almacenar, 
                    divulgar promover o distribuir datos o contenidos que sean portadores de virus o cualquier otro código informático,
                    archivos o programas diseñados para interrumpir, destruir o perjudicar el funcionamiento de cualquier programa o equipo informático o de telecomunicaciones.
                </p>

                <h4> 5. Responsabilidad del portal</h4>

                <p> El usuario conoce y acepta que el portal no otorga ninguna garantía de cualquier naturaleza, ya sea expresa o implícita, sobre los datos, 
                    contenidos, información y servicios que se incorporan y ofrecen desde el Portal.

                    Exceptuando los casos que la Ley imponga expresamente lo contrario, y exclusivamente con la medida y extensión en que lo imponga, 
                    el Portal no garantiza ni asume responsabilidad alguna respecto a los posibles daños y perjuicios causados por el uso y utilización de la información,
                    datos y servicios del Portal.

                    En todo caso, el Portal excluye cualquier responsabilidad por los daños y perjuicios que puedan deberse a la información y/o servicios prestados
                    o suministrados por terceros diferentes de la Empresa. Toda responsabilidad será del tercero ya sea proveedor o colaborador.
                </p>

                <h4> 6. Propiedad intelectual e industrial</h4>

                <p>Todos los contenidos, marcas, logos, dibujos, documentación, programas informáticos o cualquier otro elemento susceptible de protección por la 
                    legislación de propiedad intelectual o industrial, que sean accesibles en el portal corresponden exclusivamente a la empresa o a sus legítimos titulares
                    y quedan expresamente reservados todos los derechos sobre los mismos. Queda expresamente prohibida la creación de enlaces de hipertexto (links) a 
                    cualquier elemento integrante de las páginas web del Portal sin la autorización de la empresa, siempre que no sean a una página web del Portal que 
                    no requiera identificación o autenticación para su acceso, o el mismo esté restringido.

                    En cualquier caso, el portal se reserva todos los derechos sobre los contenidos, información datos y servicios que ostente sobre los mismos. 
                    El portal no concede ninguna licencia o autorización de uso al usuario sobre sus contenidos, datos o servicios, 
                    distinta de la que expresamente se detalle en las presentes condiciones generales de uso del portal.
                </p>
                <h4>7. Legislación aplicable, jurisdicción competente y notificaciones</h4>

                Las presentes condiciones se rigen y se interpretan de acuerdo con las Leyes de España. 
                Para cualquier reclamación serán competentes los juzgados y tribunales de (indicar la ciudad).
                Todas las notificaciones, requerimientos, peticiones y otras comunicaciones que el Usuario desee efectuar a la Empresa titular del Portal 
                deberán realizarse por escrito y se entenderá que han sido correctamente realizadas cuando hayan sido recibidas en la siguiente dirección 
                (indicar dirección de correo en la que se desean recibir las notificaciones).
                </p>

            </div>
        </div>
    </div>
</div>


@stop
