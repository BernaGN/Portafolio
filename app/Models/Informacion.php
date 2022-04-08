<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informacion extends Model
{
    use HasFactory;

    protected $table = 'informaciones';

    public $timestamps = false;

    protected $fillable = ['nombre', 'slug', 'descripcion'];

    public function informable()
    {
        return $this->morphTo();
    }

}
