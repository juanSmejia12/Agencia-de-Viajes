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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
