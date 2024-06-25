<?php

use App\Http\Controllers\empleadoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/empleados/mostrar',
          [empleadoController::class, 'mostrar'])->name('inicio');

Route::get('/empleado/agregar',
           [empleadoController::class, 'crearEmpleado']);

Route::post('/empleado/guardar', 
            [empleadoController::class, 'guardarEmpleado'])->name('salvar');