<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Mercancia extends Model
{
    public $table='tipo_mercancia';
    use HasFactory;

    public  function mercancia(){
        return $this->hasOne(Mercancia::class);
    }
}
