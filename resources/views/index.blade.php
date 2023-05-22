<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('alumnos.agregar') }}" class="btn btn-primary">Agregar Alumno</a>
    @if ($alumnos->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Num.</th>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Fecha de nacimiento</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Nivel</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->id }}</td>
                        <td>{{ $alumno->matricula }}</td>
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->fecha_nacimiento }}</td>
                        <td>{{ $alumno->telefono }}</td>
                        <td>{{ $alumno->email ?? 'NA' }}</td>
                        <td>
                            @if ($alumno->nivel_id == 1)
                                Primero
                            @elseif ($alumno->nivel_id == 2)
                                Segundo
                            @elseif ($alumno->nivel_id == 3)
                                Tercero
                            @elseif ($alumno->nivel_id == 4)
                                Cuarto
                            @elseif ($alumno->nivel_id == 5)
                                Quinto
                            @elseif ($alumno->nivel_id == 6)
                                Sexto
                            @elseif ($alumno->nivel_id == 7)
                                Séptimo
                            @elseif ($alumno->nivel_id == 8)
                                Octavo
                            @elseif ($alumno->nivel_id == 9)
                                Noveno
                            @else
                                Otro
                            @endif
                        </td>
                        <td>
                            <!-- Botones de eliminar y editar -->
                        <td>
                            <a href="{{ route('alumnos.edit', $alumno->id) }}">Editar</a>
                            <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</body>

</html>
