<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
        'dia', 'aula', 'tipo', 'hora'
    ];
}
