<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'    => 'required',
            'apellidos' => 'required',
            'correo'    => 'required|email',
            'sexo'      => 'required|in:M,F',
        ]);

        Persona::create($request->all());

        return response()->json(['status' => 'ok'], 201);
    }
}