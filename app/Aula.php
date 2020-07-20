<?php

namespace SisEscolar;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = "aulas";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'grado','grupo', 'escuelas_id','profesors_id',
    ];
}
