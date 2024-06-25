<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar</title>
</head>
<body>
    <h1>Agregar Nuevo Empleado</h1>
    <form action="{{ route('salvar') }}" method="POST">
        @csrf
        <input placeholder="nombre" type="text" name="nombre" id="nombre" required>
        <input placeholder="apellido" type="text" name="apellido" id="apellido" required>
        <input placeholder="edad" type="text" name="edad" id="edad" required>
        <input placeholder="puesto" type="text" name="puesto" id="puesto" required>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>