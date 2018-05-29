<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logs;
use App\Equipo;
use App\Usuario;
use Illuminate\Support\Facades\Session;
use Response;

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
           
           $log = new Logs;
           $log->IdUsuario=Session::get('idUsuario');
           $log->Descripcion="El usuario ".Session::get('User')." a creado el nuevo equipo ".$new->Nombre;
           $log->Fechaq =date('Y-m-d H:i:s');
           $log->save();
           
           $a=$new->IdEquipo;
           
           $capitan = Usuario::where('User', '=', $request->capitan)->update(array('Equipo' => $a));
           
           $log = new Logs;
           $log->IdUsuario=Session::get('idUsuario');
           $log->Descripcion="El usuario ".Session::get('User')." a añadido a ".$request->capitan." al equipo ".$new->Nombre;
           $log->Fechaq =date('Y-m-d H:i:s');
           $log->save();
           
           $jugador2 = Usuario::where('User', '=', $request->j1)->update(array('Equipo' => $a));
           
           $log = new Logs;
           $log->IdUsuario=Session::get('idUsuario');
           $log->Descripcion="El usuario ".Session::get('User')." a añadido a ".$request->j1." al equipo ".$new->Nombre;
           $log->Fechaq =date('Y-m-d H:i:s');
           $log->save();
           
           $jugador3 = Usuario::where('User', '=', $request->j2)->update(array('Equipo' => $a));
           
           $log = new Logs;
           $log->IdUsuario=Session::get('idUsuario');
           $log->Descripcion="El usuario ".Session::get('User')." a añadido a ".$request->j2." al equipo ".$new->Nombre;
           $log->Fechaq =date('Y-m-d H:i:s');
           $log->save();
           
           $jugador4 = Usuario::where('User', '=', $request->j3)->update(array('Equipo' => $a));
           
           $log = new Logs;
           $log->IdUsuario=Session::get('idUsuario');
           $log->Descripcion="El usuario ".Session::get('User')." a añadido a ".$request->j3." al equipo ".$new->Nombre;
           $log->Fechaq =date('Y-m-d H:i:s');
           $log->save();
           
           $jugador5 = Usuario::where('User', '=', $request->j4)->update(array('Equipo' => $a));

           $log = new Logs;
           $log->IdUsuario=Session::get('idUsuario');
           $log->Descripcion="El usuario ".Session::get('User')." a añadido a ".$request->j4." al equipo ".$new->Nombre;
           $log->Fechaq =date('Y-m-d H:i:s');
           $log->save();
           
           
           return redirect(url('/CargarEquipos'));
    }
    
    function cargarEquipos(Request $request){

        $resultado = Equipo::all();  

        return view('Equipos',['resultado'=> $resultado]);
        
    }
    
    function cargarEquipo(Request $request){
        $resultado = Usuario::all();
        $equipo = Equipo::all();
        return view('Equipo',['resultado'=> $resultado, 'equipo'=> $equipo, 'id'=> $request->id]);
    }
}
