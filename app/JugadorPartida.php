<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JugadorPartida extends Model
{
    protected $table = 'jugadorpartida';
    protected $primaryKey = ['IdPartida','IdUsuario','IdPersonaje'];
    public $timestamps = false;
}
