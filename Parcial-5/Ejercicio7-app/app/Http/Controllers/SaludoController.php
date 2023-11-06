<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SaludoController extends Controller
{
    public function saludar($nombre = null, $apellido = null)
    {
        if ($nombre && $apellido) {
            return view('saludo', compact('nombre', 'apellido'));
        } elseif ($nombre) {
            return view('saludo', compact('nombre'));
        } else {
            return view('saludo');
        }
    }
}