<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <input type="text" name="matricula" placeholder="Matrícula">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento">
        <input type="text" name="telefono" placeholder="Teléfono">
        <input type="email" name="email" placeholder="Email (opcional)">
        <input type="number" name="nivel_id" placeholder="ID de nivel">

        <button type="submit">Guardar</button>
    </form>
    <form action="{{ route('alumnos.destroy', ['alumno' => '__ALUMNO_ID__']) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="number" name="id" placeholder="ID de Alumno">
        <button type="submit">Eliminar</button>
    </form>

    <form action="">
        <input type="number" name="id" placeholder="ID de Alumno">
        <button type="submit">Eliminar</button>
    </form>


</body>

</html>
