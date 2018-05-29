<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Logs;
use Illuminate\Support\Facades\Session;

class RecuperarPassController extends Controller {

    //
    function enviarCorreo(Request $request) {

        $resultat = Usuario::where('Correo', '=', $request->input('emailRecuperar'))->get();

        if (count($resultat) == 1) {
            
            $log = new Logs;
            $log->IdUsuario = $resultat[0]->IdUsuario;
            $log->Descripcion = "El usuario " . $resultat[0]->User . " a hecho reset de la password";
            $log->Fechaq = date('Y-m-d H:i:s');
            $log->save();
            
//            ini_set("SMTP","smtp.gmail.com");
//            ini_set("smtp_port","25");
//            ini_set("sendmail_from","jordi.lb92@gmail.com"); 
   
            $mail = "Escuchamos que perdió su contraseña de LEPaladins. ¡Lo siento por eso!

                    ¡Pero no te preocupes! Puedes usar el siguiente enlace para restablecer tu contraseña:

                    http://localhost/DAW2M12/public/ResetPassword/". $request->emailRecuperar."

                    Gracias,
                    Tus amigos de LEPaladins";
            
            //Titulo
            $titulo = "Reset Password";
            //cabecera
            $headers = "MIME-Version: 1.0\r\n"; 
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
            //dirección del remitente 
            $headers .= "From: LEPaladins < jordi.lb92@gmail.com >\r\n";
            //Enviamos el mensaje a tu_dirección_email 
            $bool = mail($request->emailRecuperar,$titulo,$mail,$headers);
            
             return redirect(url('/LoginRegister'));
        } else
            return view('RecuperarPass', ['invalido' => 'El correo no existe']);
    }
    
}
