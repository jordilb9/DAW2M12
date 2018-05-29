<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Logs;
use App\Liga;
use Illuminate\Support\Facades\Session;

class LigaController extends Controller
{
    
    function newLiga(Request $request){
        

            $imagen1 = file_get_contents($request->fileLigaClasi);
            $imagen2 = file_get_contents($request->fileLigaJor);
        

           $new = new Liga;
           $new->Temporada=$request->temporadaLiga;
           $new->TituloClasificacion=$request->tituloClasificacion;
           $new->ImagenClasificacion=$imagen1;
           $new->TituloJornada=$request->tituloJornada;
           $new->ImagenJornada=$imagen2;
           $new->Fecha =date('Y-m-d H:i:s');
           $new->save();

           $log = new Logs;
           $log->IdUsuario=Session::get('idUsuario');
           $log->Descripcion="El usuario ".Session::get('User')." a creado una nueva liga";
           $log->Fechaq =date('Y-m-d H:i:s');
           $log->save();
           
           
           return redirect(url('/CargarLiga'));
     
    }
  
    function cargarLiga(Request $request){

        $resultado = Liga::orderBy('Id', 'desc')->take(1)->get();
        
        return view('Liga',['resultado'=> $resultado]);
        
    }
    
    
}
