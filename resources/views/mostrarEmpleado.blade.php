<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
</head>
<body>
    <h1>Lista de empleados</h1>
    <table>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Puesto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $emp)
            <tr>
                <td>{{$emp->idEmpleado}}</td>
                <td>{{$emp->nombre}}</td>
                <td>{{$emp->apellido}}</td>
                <td>{{$emp->edad}}</td>
                <td>{{$emp->puesto}}</td>
            </tr>   
            @endforeach
        </tbody>
    </table>
</body>
</html>