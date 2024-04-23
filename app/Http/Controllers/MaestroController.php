<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use Illuminate\Http\Request;

class MaestroController extends Controller
{
    public function get()
    {
        $maestros = Maestro::all();
        return view("maestro.maestro-prueba", [
            "maestros" => $maestros,
        ]);
    }
}
