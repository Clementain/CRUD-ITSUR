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
        $alumnos = Alumno::all();
        return view('index', compact('alumnos'));
    }

    public function agregar()
    {
        return view('alumnos');
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
            'nivel_id' => 'required|integer',
        ]);
        Alumno::create($data);
        return redirect()->route('alumnos.index')->with('success', 'El alumno ha sido agregado exitosamente.');
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
        return view('editar', compact('alumno'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'matricula' => 'required|string|max:10',
            'nombre' => 'required|string|max:50',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|string|max:20',
            'email' => 'nullable|email|max:50',
            'nivel_id' => 'required|exists:nivels,id',
        ]);

        $alumno = Alumno::findOrFail($id);
        $alumno->update($data);

        return redirect()->route('alumnos.index')->with('success', 'El alumno ha sido actualizado exitosamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('success', 'El alumno ha sido eliminado exitosamente.');
    }
}
