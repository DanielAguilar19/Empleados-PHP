<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function mostrar(){
        $empleados = Empleado::all();
        return view('mostrarEmpleado', compact('empleados'));
    }

    public function crearEmpleado(){
        return view('agregarEmpleado');
    }

    public function guardarEmpleado(Request $request){
        $nuevoEmpleado = new Empleado();
        $nuevoEmpleado->nombre = $request->nombre;
        $nuevoEmpleado->apellido = $request->apellido;
        $nuevoEmpleado->edad = $request->edad;
        $nuevoEmpleado->puesto = $request->puesto;
        $nuevoEmpleado->save();
        
        return redirect('/empleados/mostrar');
    }
}