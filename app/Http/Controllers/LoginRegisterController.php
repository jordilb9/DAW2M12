<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Logs;
use Illuminate\Support\Facades\Session;

class LoginRegisterController extends Controller {

    //
    function login(Request $request) {
        
        $clientIP = \Request::ip();
        
        $resultat = Usuario::where('User', '=', $request->input('user'))->where('Contrasenya', '=', $request->input('password'))->get();

        if (count($resultat) == 1) {
            Session::put('idUsuario', $resultat[0]->IdUsuario);
            Session::put('User', $resultat[0]->User);
            Session::put('Rango', $resultat[0]->Rango);


            $log = new Logs;
            $log->IdUsuario = $resultat[0]->IdUsuario;
            $log->Descripcion = "El usuario " . $resultat[0]->User . " a hecho login";
            $log->Fechaq = date('Y-m-d H:i:s');
            $log->save();


            return redirect(url('/'));
        } else
            return view('LoginRegister', ['invalido' => 'Los datos no son validos']);
    }

    function register(Request $request) {

        // Checks if form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            function post_captcha($user_response) {
                $fields_string = '';
                $fields = array(
                    'secret' => '6LdiBFsUAAAAAHa-cvd4EuJ5lQE5I_C9liSy0mSz',
                    'response' => $user_response
                );
                foreach ($fields as $key => $value)
                    $fields_string .= $key . '=' . $value . '&';
                $fields_string = rtrim($fields_string, '&');

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
                curl_setopt($ch, CURLOPT_POST, count($fields));
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

                $result = curl_exec($ch);
                curl_close($ch);

                return json_decode($result, true);
            }

            // Call the function post_captcha
            $res = post_captcha($_POST['g-recaptcha-response']);

            if (!$res['success']) {
                // What happens when the CAPTCHA wasn't checked
                echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
            } else {
                $resultado = Usuario::where('User', '=', $request->input('user'))
                        ->orWhere('Correo', '=', $request->input('email'))
                        ->orWhere('PaladinsNick', '=', $request->input('nickPaladins'))
                        ->get();

                if (count($resultado) == 1) {

                    return view('LoginRegister', ['RegistroInvalido' => 'El usuario ya existe']);
                } else {
                    $newUser = new Usuario;
                    $newUser->User = $request->user;
                    $newUser->Contrasenya = $request->password;
                    $newUser->Correo = $request->email;
                    $newUser->Nombre = $request->nombre;
                    $newUser->Apellido = $request->apellidos;
                    $newUser->Edad = $request->edad;
                    $newUser->Nacionalidad = $request->nacionalidad;
                    $newUser->PaladinsNick = $request->nickPaladins;
                    $newUser->Rango = 1;
                    $newUser->FechaCreacion = date('Y-m-d H:i:s');
                    $newUser->save();
                }


                return redirect(url('/LoginRegister'));
            }
        }
    }

}
