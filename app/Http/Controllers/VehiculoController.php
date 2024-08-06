<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', compact('vehiculos'));
    }

    public function create()
    {
        return view('vehiculos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        Vehiculo::create($request->all());
        return redirect()->route('vehiculos.index')->with('success', 'vehiculo creado con éxito.');
    }

    public function show(Vehiculo $vehiculo)
    {
        return view('vehiculos.show', compact('vehiculo'));
    }

    public function edit(Vehiculo $vehiculo)
    {
        return view('vehiculos.edit', compact('vehiculo'));
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        $vehiculo->update($request->all());
        return redirect()->route('vehiculos.index')->with('success', 'vehiculo actualizado con éxito.');
    }

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('vehiculos.index')->with('success', 'vehiculo eliminado con éxito.');
    }

}
