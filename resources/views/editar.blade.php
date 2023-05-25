<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


    <div class="container">
        <div class="row justify-content-center">
            <div>
                <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST" class="g-form">
                    @csrf
                    @method('PUT')
                    <div class="g-form-row">
                        <span class="form-label">Matrícula</span>
                        <input type="text" name="matricula" class="form-control" placeholder="Matrícula"
                            value="{{ $alumno->matricula }}" required>
                    </div>
                    @error('matricula')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="g-form-row">
                        <span class="form-label">Nombre</span>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre"
                            value="{{ $alumno->nombre }}" required>
                    </div>
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="g-form-row">
                        <span class="form-label">Fecha de nacimiento</span>
                        <input type="date" name="fecha_nacimiento" class="form-control"
                            placeholder="Fecha de nacimiento" value="{{ $alumno->fecha_nacimiento }}" required>
                    </div>
                    @error('fecha_nacimiento')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="g-form-row">
                        <span class="form-label">Teléfono</span>
                        <input type="text" name="telefono" class="form-control" placeholder="Teléfono"
                            value="{{ $alumno->telefono }}" required>
                    </div>
                    @error('telefono')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="g-form-row">
                        <span class="form-label">Email (opcional)</span>
                        <input type="email" name="email" class="form-control" placeholder="Email (opcional)"
                            value="{{ $alumno->email }}">
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="g-form-row">
                        <span class="form-label">ID de nivel</span>
                        <select name="nivel_id" id="nivel_id" class="form-control" required>
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
                    </div>
                    @error('nivel_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <button type="submit" class="btn btn-primary d-block w-75 mx-auto">Actualizar</button>

                </form>
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
