<?php

namespace SisEscolar;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $table = "periodos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ciclo_escolar',
    ];
}
