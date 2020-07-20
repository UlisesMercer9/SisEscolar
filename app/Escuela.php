<?php

namespace SisEscolar;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $table = "escuelas";

      protected $fillable = [
        'nombre','clave','direccion','telefono','correo','estado','municipio','localidad','admins_id'
    ];
}
