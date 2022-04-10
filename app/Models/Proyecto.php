<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContracts;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Proyecto extends Model implements AuditableContracts, HasMedia
{
    use HasFactory, SoftDeletes, Auditable, InteractsWithMedia;

    protected $perPage = 10;

    protected $fillable = ['cliente_id'];

    public function informacion()
    {
        return $this->morphOne(Informacion::class, 'informable');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function habilidades()
    {
        return $this->belongsToMany(Habilidad::class, 'proyectos_habilidades');
    }
}
