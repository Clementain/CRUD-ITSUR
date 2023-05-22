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

        <select name="nivel_id" id="nivel_id">
            <option value="1">Primero</option>
            <option value="2">Segundo</option>
            <option value="3">Tercero</option>
            <option value="4">Cuarto</option>
            <option value="5">Quinto</option>
            <option value="6">Sexto</option>
            <option value="7">Septimo</option>
            <option value="8">Octavo</option>
            <option value="9">Noveno</option>
        </select>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>
