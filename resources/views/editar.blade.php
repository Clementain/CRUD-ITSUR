<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Aquí puedes mostrar los campos del alumno y precargar los datos -->
        <input type="text" name="nombre" value="{{ $alumno->nombre }}" placeholder="Nombre">
        <input type="text" name="apellido" value="{{ $alumno->apellido }}" placeholder="Apellido">
        <button type="submit">Guardar cambios</button>
    </form>

</body>

</html>
