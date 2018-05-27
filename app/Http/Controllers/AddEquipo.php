<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logs;
use App\Equipo;
use App\Usuario;
use Illuminate\Support\Facades\Session;

class AddEquipo extends Controller
{
    function newEquipo(Request $request){
        
//           $image = $_FILES[$request->fileBlo]['tmp_name'];
//           $imgContent = addslashes(file_get_contents($image));
            $imagen = file_get_contents($request->fileBlog);
        

           $new = new Equipo;
           $new->Nombre=$request->nombre;
           $new->Siglas=$request->siglas;
           $new->Descripcion=$request->descriptionEquipo;
           $new->Logo=$imagen; 
           $new->FechaCreacion =date('Y-m-d H:i:s');
           $new->save();
           
           $resultat = Equipo::where('Nombre', '=', $request->nombre)->get();
           //echo $resultat->IdEquipo;
           $jugador = new Usuario;
           $jugador = Usuario::find($request->capitan);
           $jugador->Equipo=$resultat[0]->IdEquipo;
           $jugador = Usuario::find($request->jugador2);
           $jugador->Equipo=$resultat[0]->IdEquipo;
           $jugador = Usuario::find($request->jugador3);
           $jugador->Equipo=$resultat[0]->IdEquipo;
           $jugador = Usuario::find($request->jugador4);
           $jugador->Equipo=$resultat[0]->IdEquipo;
           $jugador = Usuario::find($request->jugador5);
           $jugador->Equipo=$resultat[0]->IdEquipo;
           
           $log = new Logs;
           $log->IdUsuario=Session::get('idUsuario');
           $log->Descripcion="El usuario ".Session::get('User')." a creado un nuevo equipo";
           $log->Fechaq =date('Y-m-d H:i:s');
           $log->save();
           
           
           return redirect(url('/Equipos'));
     
    }
}
