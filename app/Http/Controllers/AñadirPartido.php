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
            
            
            $jugador = new JugadorPartida;
            $jugador->IdPartida=$request->IdPartida;
            $jugador->IdUsuario=$request->IdUsuario;
            $jugador->IdPersonaje=$request->IdPersonaje;
            $jugador->Creditos=$request->Creditos;
            $jugador->Kills=$request->Kills;
            $jugador->Deaths=$request->Deaths;
            $jugador->Assists=$request->Assists;
            $jugador->Racha=$request->Racha;
            $jugador->TiempoObj=$request->TiempoObj;
            $jugador->Daño=$request->Daño;
            $jugador->BlocDaño=$request->BlocDaño;
            $jugador->Curacion=$request->Curacion;
            
            
        }
    }
}
