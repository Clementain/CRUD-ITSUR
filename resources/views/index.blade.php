<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
<div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2><b>Alumnos Registrados</b></h2>
						</div>
						<div class="col-xs-6">
							<a href="{{ route('alumnos.agregar') }}" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Nuevo registro</span></a>
						</div>
					</div>
				</div>
				@if ($alumnos->count() > 0)
                <table class="table table-striped table-hover">
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
                                    <a class="btn btn-danger" href="{{ route('alumnos.edit', $alumno->id) }}">Editar</a>
                                    <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-warning" type="submit">Eliminar</button>
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
                    </div>
                </div>
    </div>
	</div>

</body>

</html>

