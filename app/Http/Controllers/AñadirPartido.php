<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class añadirPartido extends Controller
{
    function añadirPartido(Request $request){
        session_start();
        
        $resultat = Usuario::where('IdUsuario','=',$request->input('IdUsuario'))->where('Rango','=','2');
        
        if(count($resultat)==1){
            $partida = new Partida;
            $partida->IdPartida=$request->IdPartida;
            $partida->EquipoL=$request->EquipoL;
            $partida->EquipoV=$request->EquipoV;
            $partida->Mapa=$request->Mapa;
            $partida->Fecha=$request->Fecha;
            $partida->save();
            
        }
    }
}
