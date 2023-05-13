<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercancia extends Model
{
    public $table='mercancia';
    use HasFactory;

    public  function tipo_mercancia(){

        $tipo_mercancia= Tipo_Mercancia::find($this->id_tipo_mercancia);
        return $this->belongsTo(Tipo_Mercancia::class);
    }
}
