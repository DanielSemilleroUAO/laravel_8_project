<?php

namespace App\Http\Controllers;

use App\Models\Planta;
use App\Models\TipoPlanta;
use Illuminate\Http\Request;

class PlantasController extends Controller
{
    public function index()
    {
        $plantas = Planta::paginate();
        return view('plantas.index', compact('plantas'));
    }
}
