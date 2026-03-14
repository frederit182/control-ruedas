<?php

namespace App\Http\Controllers;

use App\Models\TipoRueda;
use Illuminate\Http\Request;

class TipoRuedaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $tipos = TipoRueda::all();
    return view('tipos_rueda.index', compact('tipos'));
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
    $tipo = new TipoRueda();
    $tipo->nombre = $request->nombre;
    $tipo->save();

    return redirect('/tipos-rueda');
}

    /**
     * Display the specified resource.
     */
    public function show(TipoRueda $tipoRueda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoRueda $tipoRueda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoRueda $tipoRueda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoRueda $tipoRueda)
    {
        //
    }
}
