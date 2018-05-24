<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Logs;
use App\Partida;
use APP\JugadorPartida;
use APP\Personaje;

class AddJugadorController extends Controller {

    //
    public function addPartido(Request $request) {
        echo $request->mapa . " " . $request->hora;

        $partida = new Partida;
        $partida->EquipoL = 1;
        $partida->EquipoV = 2;
        $partida->Mapa = $request->mapa;
        $partida->Fecha = "2018-05-24";
        $partida->save();

        $log = new Logs;
        $log->IdUsuario = Session::get('idUsuario');
        $log->Descripcion = "El usuario " . Session::get('User') . " ha creado la partida " . $request->mapa;
        $log->Fechaq = date('Y-m-d H:i:s');
        $log->save();
    }

    public function addJugador(Request $request) {
        $jugador = new JugadorPartida;
        $jugador->IdPartida = $request->IdPartida;
        $jugador->IdUsuario = $request->IdUsuario;
        $jugador->IdPersonaje = $request->IdPersonaje;
        $jugador->Creditos = $request->oro;
        $jugador->Kills = $request->kills;
        $jugador->Deaths = $request->deaths;
        $jugador->Assists = $request->assists;
        $jugador->Racha = $request->racha;
        $jugador->TiempoObj = $request->objetivo;
        $jugador->Daño = $request->dmg;
        $jugador->BlocDaño = $request->mitigado;
        $jugador->Curacion = $request->heal;
        $jugador->save();
        
        $log = new Logs;
        $log->IdUsuario = Session::get('idUsuario');
        $log->Descripcion = "El usuario " . Session::get('User') . " ha añadido una stat de jugador " . $request->IdPartida;
        $log->Fechaq = date('Y-m-d H:i:s');
        $log->save();
    }

    public function actualizaPersonajes(Request $request) {
        $personaje->IdPersonaje = $request->NombrePersonaje;
        $personaje->Rol = $request->rol;
        $personaje->Descripcion = $request->lore;
        $personaje->save();
        
        $log = new Logs;
        $log->IdUsuario = Session::get('idUsuario');
        $log->Descripcion = "El usuario " . Session::get('User') . " ha actualizado la tabla personajes";
        $log->Fechaq = date('Y-m-d H:i:s');
        $log->save();
    }

    /* $log = new Logs;
      $log->IdUsuario = $request->usari;
      $log->Descripcion = "El usuario " . $request->pass . " a hecho login";
      $log->Fechaq = date('Y-m-d H:i:s');
      $log->save(); */
    //echo "<script>alert(\"holaAMIGO\")</script>";
    /* echo "hola";
      $recoger="<scrip>recogerApi()</script>";
      echo $recoger; */
    /* session_start();

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


      } */
}
