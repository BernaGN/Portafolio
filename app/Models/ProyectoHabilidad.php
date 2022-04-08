<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoHabilidad extends Model
{
    use HasFactory;

    protected $table = 'proyectos_habilidades';

    public $timestamps = false;

    protected $fillable = ['proyecto_id', 'habilidad_id'];
}
