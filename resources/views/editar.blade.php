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
        <input type="text" name="matricula" placeholder="Matrícula" value="{{ $alumno->matricula }}">
        <input type="text" name="nombre" placeholder="Nombre" value="{{ $alumno->nombre }}">
        <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento"
            value="{{ $alumno->fecha_nacimiento }}">
        <input type="text" name="telefono" placeholder="Teléfono" value="{{ $alumno->telefono }}">
        <input type="email" name="email" placeholder="Email (opcional)" value="{{ $alumno->email }}">
        <input type="number" name="nivel_id" placeholder="ID de nivel" value="{{ $alumno->nivel_id }}">

        <button type="submit">Actualizar</button>
    </form>


</body>

</html>
