<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Logs;

class CerrarSesionController extends Controller {

    public function cerrarSesion() {
        //Iniciem sessió


        //Creem una nova variable de tipus logs i guardem l'idUsuari, descripcio, dataLog, hora i path
        $log = new Logs;
        $log->IdUsuario = Session::get('idUsuario');
        $log->Descripcion = "El usuario " . Session::get('User') . " a cerrado sesion";
        $log->Fechaq = date('Y-m-d H:i:s');
        $log->save();
        

        //Utilitzem el metode flush() per borrar tota la informació de la sessió
        Session::flush();

        //Redirigim al CU01
        return redirect('/');
    }

}
