<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalesController extends Controller
{
    public function index()
    {
        $animales = Animal::paginate();
        return view('animales.index', compact('animales'));
    }
}
