<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContracts;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Cliente extends Model implements AuditableContracts, HasMedia
{
    use HasFactory, SoftDeletes, Auditable, InteractsWithMedia;

    protected $fillable = ['nombre', 'proyecto_id'];

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class);
    }

}
