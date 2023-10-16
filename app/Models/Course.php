<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'cantidad_creditos',
        'nombre_docente',
        'prerrequisito',
        'trabajo_autonomo',
        'trabajo_dirigido',
        'programa',
        'semestre'
    ];
}
