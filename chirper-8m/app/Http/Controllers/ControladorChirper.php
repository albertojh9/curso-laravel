<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorChirper extends Controller
{
    public function index()
    {
        $datos = "Ejemplo de título para la vista";
        
        $datos_modelo = [
            [
            "meme" => "este es un meme de ejemplo",
            "usuario" => "usuario_ejemplo"
        ],
        [
            "meme" => "otro meme de ejemplo",
            "usuario" => "otro_usuario_ejemplo"
        ]
        ];
        
        return view('ejemplo_mvc', ['nombre_titulo' => $datos, 'datos_modelo' => $datos_modelo]);
    }
}
