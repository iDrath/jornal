<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //protected $table = 'nombre_de_tabla_diferente'
    public function tituloInvertido(){
        return strrev($this->titulo);
    }

    public function categoria(){
        return $this->belongsTo(categoria::class);
    }
}
