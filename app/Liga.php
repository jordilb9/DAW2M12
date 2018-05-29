<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{
    protected $table = 'liga';
    protected $primaryKey = 'Id';
    public $timestamps = false;
}
