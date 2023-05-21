<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'matricula' => 'required|string|max:10',
            'nombre' => 'required|string|max:50',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|string|max:20',
            'email' => 'nullable|email|max:50',
            'nivel_id' => 'required|exists:nivels,id',
        ]);

        Alumno::create($data);

        return view('alumnos');
    }


    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('editar');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->nombre = $request->input('nombre');
        $alumno->apellido = $request->input('apellido');
        // Actualiza otros atributos según sea necesario
        $alumno->save();

        // Realiza cualquier otra acción necesaria

        return view('editar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $alumno)
    {
        $id = $request->input('id');
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();
        return view('alumnos')->with('success', 'El alumno ha sido eliminado exitosamente.');
    }
}
