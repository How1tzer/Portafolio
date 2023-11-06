<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pantalla', function () {
    return view('pantalla');
});

Route::get('/operacion/{tipo}/{num1}/{num2}', function ($tipo, $num1, $num2) {
    
    if (!is_numeric($num1) || !is_numeric($num2)) {
        return "Se deben ingresar numeros";
    }

    $num1 = floatval($num1);
    $num2 = floatval($num2);

    $resultado = 0;

    switch ($tipo) {
        case 'suma':
            $resultado = $num1 + $num2;
            break;
        case 'resta':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicacion':
            $resultado = $num1 * $num2;
            break;
        case 'division':
            if ($num2 == 0) {
                return "No se puede dividir por cero.";
            }
            $resultado = $num1 / $num2;
            break;
        default:
            return "Operación no válida. Las operaciones válidas son: suma, resta, multiplicacion, division.";
    }

    return view('pantalla', compact('resultado'));
});

Route::get('/saludar/{nombre}/{apellido}', function ($nombre, $apellido) {
    return view('saludo', compact('nombre', 'apellido'));
});
