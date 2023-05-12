<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercancia extends Model
{
    public $table='mercancia';
    use HasFactory;

    public  function mercancia(){
        return $this->hasOne('App\Mercancia');
    }
}
