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
        @error('matricula')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <input type="text" name="nombre" placeholder="Nombre" value="{{ $alumno->nombre }}">
        @error('nombre')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento"
            value="{{ $alumno->fecha_nacimiento }}">
        @error('fecha_nacimiento')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <input type="text" name="telefono" placeholder="Teléfono" value="{{ $alumno->telefono }}">
        @error('telefono')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <input type="email" name="email" placeholder="Email (opcional)" value="{{ $alumno->email }}">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <select name="nivel_id">
            <option value="1" {{ $alumno->nivel_id == 1 ? 'selected' : '' }}>Primero</option>
            <option value="2" {{ $alumno->nivel_id == 2 ? 'selected' : '' }}>Segundo</option>
            <option value="3" {{ $alumno->nivel_id == 3 ? 'selected' : '' }}>Tercero</option>
            <option value="4" {{ $alumno->nivel_id == 4 ? 'selected' : '' }}>Cuarto</option>
            <option value="5" {{ $alumno->nivel_id == 5 ? 'selected' : '' }}>Quinto</option>
            <option value="6" {{ $alumno->nivel_id == 6 ? 'selected' : '' }}>Sexto</option>
            <option value="7" {{ $alumno->nivel_id == 7 ? 'selected' : '' }}>Séptimo</option>
            <option value="8" {{ $alumno->nivel_id == 8 ? 'selected' : '' }}>Octavo</option>
            <option value="9" {{ $alumno->nivel_id == 9 ? 'selected' : '' }}>Noveno</option>
        </select>
        @error('nivel_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <button type="submit">Actualizar</button>
    </form>


</body>

</html>
