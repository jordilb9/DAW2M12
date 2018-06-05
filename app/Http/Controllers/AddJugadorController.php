<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Logs;
use App\Partida;
use App\JugadorPartida;
use App\Personaje;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AddJugadorController extends Controller {

    //
    public function addPartido(Request $request) {
        echo $request->mapa . " " . $request->hora;
        
        DB::table('partida')->insert(['EquipoL' => 1, 
                'EquipoV' => 2, 'Mapa' => $request->mapa, 'Fecha' => date('Y-m-d H:i:s')]);
            
        DB::table('logs')->insert(['IdUsuario' => Session::get('idUsuario'), 
                'Descripcion' => 'El usuario '.Session::get('User').' ha añadido la partida en '.$request->mapa,
                'Fechaq' => date('Y-m-d H:i:s')]);
    }

    public function addJugador(Request $request) {
        sleep(1);
        $resultat = DB::table('usuario')->select('IdUsuario')->where('PaladinsNick', '=', $request->nombre)->get();
        $resultat2 = DB::table('partida')->select('IdPartida')->orderBy('IdPartida', 'DESC')->first();
        
        
        DB::table('jugadorpartida')->insert(['IdPartida' => $resultat2->IdPartida, 'IdUsuario' => $resultat[0]->IdUsuario, 
            'IdPersonaje' => $request->personaje, 'Creditos' => $request->oro, 'Kills' => $request->kills, 
            'Deaths' => $request->deaths, 'Assists' => $request->assists, 'Racha' => $request->racha, 
            'TiempoObj' => $request->objetivo, 'Daño' => $request->dmg, 'BlocDaño' => $request->mitigado, 
            'Curacion' => $request->heal]);
    }
    
    public function actualizaPersonajes(Request $request) {
        
        $resultat = Personaje::where('NombrePersonaje', '=', $request->nombre)->get();
        
        if (count($resultat) != 1) {
            sleep(1);
            DB::table('personaje')->insert(['IdPersonaje' => $request->datos, 
                'NombrePersonaje' => $request->nombre, 'Rol' => $request->rol, 'Descripcion' => $request->lore, 'Imagen' => $request->imagen]);
            sleep(1);
            DB::table('logs')->insert(['IdUsuario' => Session::get('idUsuario'), 
                'Descripcion' => 'El usuario '.Session::get('User').' ha añadido el personaje '.$request->nombre,
                'Fechaq' => date('Y-m-d H:i:s')]);
        }
    }
}

