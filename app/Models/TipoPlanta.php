<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPlanta extends Model
{
    use HasFactory;
    protected $table = 'tipo_planta';

    public function planta()
    {
        return $this->belongsTo(Planta::class);
    }
}
