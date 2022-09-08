<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table = 'animales';
    
    public function getGenero()
    {
        return $this->hasOne(Genero::class, 'id', 'unidades_medida_id');
    }
}
