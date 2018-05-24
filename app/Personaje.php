<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    protected $table = 'personaje';
    protected $primaryKey = 'IdPersonaje';
    public $timestamps = false;
}
