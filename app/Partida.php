<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    protected $table = 'partida';
    protected $primaryKey = 'IdPartida';
    public $timestamps = false;
}
