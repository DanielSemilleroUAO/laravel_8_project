<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    use HasFactory;
    protected $table = 'plantas';

    public function getTipoPlanta()
    {
        return $this->hasOne(TipoPlanta::class, 'id', 'tipo_planta_id');
    }

    public function getLocacion()
    {
        return $this->hasOne(Locacion::class, 'id', 'locacion_id');
    }

    public function getUnidadMedida()
    {
        return $this->hasOne(UnidadesMedida::class, 'id', 'unidades_medida_id');
    }

    public function getFamlia()
    {
        return $this->hasOne(Familia::class, 'id', 'familia_id');
    }

    public function getGenero()
    {
        return $this->hasOne(Genero::class, 'id', 'genero_id');
    }

    public function getEspecie()
    {
        return $this->hasOne(Especie::class, 'id', 'especie_id');
    }

    public function getFotos()
    {
        return $this->hasOne(Foto::class, 'id', 'fotos_id');
    }
}
