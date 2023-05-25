<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Alumnos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-6">
                            <h2 class="col-xs-6"><b>Alumnos Registrados</b></h2>
                        </div>
                        <div class="col-xs-6">
                            <button type="button" class="btn btn-primary d-block mt-4 ms-5 mb-2" data-bs-toggle="modal"
                                data-bs-target="#agregar">
                                Agregar Alumno
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Modal Agregar-->
                <div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar alumno</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div>
                                            <form action="{{ route('alumnos.store') }}" method="POST" class="g-form">
                                                @csrf
                                                <div class="g-form-row">
                                                    <span class="form-label">Matrícula</span>
                                                    <input type="text" name="matricula" class="form-control"
                                                        placeholder="Matrícula" value="{{ old('matricula') }}" required>
                                                </div>
                                                @error('matricula')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="g-form-row">
                                                    <span class="form-label">Nombre</span>
                                                    <input type="text" name="nombre" class="form-control"
                                                        placeholder="Nombre" value="{{ old('nombre') }}" required>
                                                </div>
                                                @error('nombre')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="g-form-row">
                                                    <span class="form-label">Fecha de nacimiento</span>
                                                    <input type="date" name="fecha_nacimiento" class="form-control"
                                                        placeholder="Fecha de nacimiento"
                                                        value="{{ old('fecha_nacimiento') }}" required>
                                                </div>
                                                @error('fecha_nacimiento')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="g-form-row">
                                                    <span class="form-label">Teléfono</span>
                                                    <input type="text" name="telefono" class="form-control"
                                                        placeholder="Teléfono" value="{{ old('telefono') }}" required>
                                                </div>
                                                @error('telefono')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="g-form-row">
                                                    <span class="form-label">Email (opcional)</span>
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="Email (opcional)" value="{{ old('email') }}">
                                                </div>
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="g-form-row">
                                                    <span class="form-label">ID de nivel</span>
                                                    <select name="nivel_id" id="nivel_id" class="form-control"
                                                        required>
                                                        <option value="1"
                                                            {{ old('nivel_id') == 1 ? 'selected' : '' }}>Primero
                                                        </option>
                                                        <option value="2"
                                                            {{ old('nivel_id') == 2 ? 'selected' : '' }}>Segundo
                                                        </option>
                                                        <option value="3"
                                                            {{ old('nivel_id') == 3 ? 'selected' : '' }}>Tercero
                                                        </option>
                                                        <option value="4"
                                                            {{ old('nivel_id') == 4 ? 'selected' : '' }}>Cuarto
                                                        </option>
                                                        <option value="5"
                                                            {{ old('nivel_id') == 5 ? 'selected' : '' }}>Quinto
                                                        </option>
                                                        <option value="6"
                                                            {{ old('nivel_id') == 6 ? 'selected' : '' }}>Sexto
                                                        </option>
                                                        <option value="7"
                                                            {{ old('nivel_id') == 7 ? 'selected' : '' }}>Séptimo
                                                        </option>
                                                        <option value="8"
                                                            {{ old('nivel_id') == 8 ? 'selected' : '' }}>Octavo
                                                        </option>
                                                        <option value="9"
                                                            {{ old('nivel_id') == 9 ? 'selected' : '' }}>Noveno
                                                        </option>
                                                    </select>
                                                </div>
                                                @error('nivel_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit"
                                                        class="btn btn-primary d-block w-75 mx-auto">Guardar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                        <button type="button" class="btn btn-primary d-block mb-2 w-100"
                                            data-bs-toggle="modal" data-bs-target="#editar{{ $alumno->id }}">
                                            Editar Alumno
                                        </button>
                                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger w-100">Eliminar</button>
                                        </form>
                                    </td>
                                    </td>
                                </tr>
                                <!-- Modal editar-->
                                <div class="modal fade" id="editar{{ $alumno->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar alumno</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div>
                                                            <form action="{{ route('alumnos.update', $alumno->id) }}"
                                                                method="POST" class="g-form">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="g-form-row">
                                                                    <span class="form-label">Matrícula</span>
                                                                    <input type="text" name="matricula"
                                                                        class="form-control" placeholder="Matrícula"
                                                                        value="{{ $alumno->matricula }}" required>
                                                                </div>
                                                                @error('matricula')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                                <div class="g-form-row">
                                                                    <span class="form-label">Nombre</span>
                                                                    <input type="text" name="nombre"
                                                                        class="form-control" placeholder="Nombre"
                                                                        value="{{ $alumno->nombre }}" required>
                                                                </div>
                                                                @error('nombre')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                                <div class="g-form-row">
                                                                    <span class="form-label">Fecha de nacimiento</span>
                                                                    <input type="date" name="fecha_nacimiento"
                                                                        class="form-control"
                                                                        placeholder="Fecha de nacimiento"
                                                                        value="{{ $alumno->fecha_nacimiento }}"
                                                                        required>
                                                                </div>
                                                                @error('fecha_nacimiento')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                                <div class="g-form-row">
                                                                    <span class="form-label">Teléfono</span>
                                                                    <input type="text" name="telefono"
                                                                        class="form-control" placeholder="Teléfono"
                                                                        value="{{ $alumno->telefono }}" required>
                                                                </div>
                                                                @error('telefono')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                                <div class="g-form-row">
                                                                    <span class="form-label">Email (opcional)</span>
                                                                    <input type="email" name="email"
                                                                        class="form-control"
                                                                        placeholder="Email (opcional)"
                                                                        value="{{ $alumno->email }}">
                                                                </div>
                                                                @error('email')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                                <div class="g-form-row">
                                                                    <span class="form-label">ID de nivel</span>
                                                                    <select name="nivel_id" id="nivel_id"
                                                                        class="form-control" required>
                                                                        <option value="1"
                                                                            {{ $alumno->nivel_id == 1 ? 'selected' : '' }}>
                                                                            Primero</option>
                                                                        <option value="2"
                                                                            {{ $alumno->nivel_id == 2 ? 'selected' : '' }}>
                                                                            Segundo</option>
                                                                        <option value="3"
                                                                            {{ $alumno->nivel_id == 3 ? 'selected' : '' }}>
                                                                            Tercero</option>
                                                                        <option value="4"
                                                                            {{ $alumno->nivel_id == 4 ? 'selected' : '' }}>
                                                                            Cuarto</option>
                                                                        <option value="5"
                                                                            {{ $alumno->nivel_id == 5 ? 'selected' : '' }}>
                                                                            Quinto</option>
                                                                        <option value="6"
                                                                            {{ $alumno->nivel_id == 6 ? 'selected' : '' }}>
                                                                            Sexto</option>
                                                                        <option value="7"
                                                                            {{ $alumno->nivel_id == 7 ? 'selected' : '' }}>
                                                                            Séptimo</option>
                                                                        <option value="8"
                                                                            {{ $alumno->nivel_id == 8 ? 'selected' : '' }}>
                                                                            Octavo</option>
                                                                        <option value="9"
                                                                            {{ $alumno->nivel_id == 9 ? 'selected' : '' }}>
                                                                            Noveno</option>
                                                                    </select>
                                                                </div>
                                                                @error('nivel_id')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cerrar</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary d-block w-75 mx-auto mt-2">Actualizar</button>
                                                                </div>


                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

            </div>
        </div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>
