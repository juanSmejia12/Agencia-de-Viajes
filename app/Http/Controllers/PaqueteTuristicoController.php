<?php

namespace App\Http\Controllers;

use App\Models\PaqueteTuristico;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PaqueteTuristicoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */

     public function __construct()
    {
        $this->middleware('auth'); 
    }
    public function index()
    {
        $paquetes = PaqueteTuristico::all();
        return view('paquete.index', compact('paquetes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paquete.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'destino' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'duracion' => 'required|string|max:100',
            'precio' => 'required|numeric|min:0',
            'incluye' => 'required|string',
        ]);
    
        PaqueteTuristico::create($request->all());
    
        return redirect()->route('paquete.index')->with('success', 'Paquete turístico creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paquete = PaqueteTuristico::findOrFail($id);
        return view('paquete.show', compact('paquete'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paquete = PaqueteTuristico::findOrFail($id);
        return view('paquete.edit', compact('paquete'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'destino' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'duracion' => 'required|integer',
            'precio' => 'required|numeric',
            'incluye' => 'nullable|string',
        ]);
    
        $paquete = PaqueteTuristico::findOrFail($id);
        $paquete->update($request->all());
    
        return redirect()->route('paquete.index')->with('success', 'Paquete actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paquete = PaqueteTuristico::findOrFail($id);
        $paquete->delete();

        return redirect()->route('paquete.index')->with('success', 'Paquete eliminado correctamente');
    }
}
