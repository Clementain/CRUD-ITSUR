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
        <input type="text" name="matricula" placeholder="Matrícula" value="{{ old('matricula') }}">
        @error('matricula')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
        @error('nombre')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento"
            value="{{ old('fecha_nacimiento') }}">
        @error('fecha_nacimiento')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <input type="text" name="telefono" placeholder="Teléfono" value="{{ old('telefono') }}">
        @error('telefono')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <input type="email" name="email" placeholder="Email (opcional)" value="{{ old('email') }}">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <select name="nivel_id" id="nivel_id">
            <option value="1" {{ old('nivel_id') == 1 ? 'selected' : '' }}>Primero</option>
            <option value="2" {{ old('nivel_id') == 2 ? 'selected' : '' }}>Segundo</option>
            <option value="3" {{ old('nivel_id') == 3 ? 'selected' : '' }}>Tercero</option>
            <option value="4" {{ old('nivel_id') == 4 ? 'selected' : '' }}>Cuarto</option>
            <option value="5" {{ old('nivel_id') == 5 ? 'selected' : '' }}>Quinto</option>
            <option value="6" {{ old('nivel_id') == 6 ? 'selected' : '' }}>Sexto</option>
            <option value="7" {{ old('nivel_id') == 7 ? 'selected' : '' }}>Séptimo</option>
            <option value="8" {{ old('nivel_id') == 8 ? 'selected' : '' }}>Octavo</option>
            <option value="9" {{ old('nivel_id') == 9 ? 'selected' : '' }}>Noveno</option>
        </select>
        @error('nivel_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <button type="submit">Guardar</button>
    </form>

</body>

</html>
