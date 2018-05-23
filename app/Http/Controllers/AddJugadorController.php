<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Logs;
use App\Partida;

class AddJugadorController extends Controller
{
    //
    public function addPartido(Request $request){
        echo $request->usuari." ".$request->pass;
        /*echo "hola";
        $recoger="<scrip>recogerApi()</script>";
        echo $recoger;*/
        /*session_start();
        
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
            
            
        }*/
    }
}
