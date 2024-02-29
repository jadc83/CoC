<?php

namespace App\Http\Controllers;

use App\Models\Mochila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MochilaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mochilas = Mochila::all();
        return view("mochilas.index", ["mochilas"=>$mochilas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mochilas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Crear una nueva instancia del modelo y asignar valores
        $mochila = new Mochila();
        $mochila->inventario_id = $request->inventario_id;
        $mochila->objeto_id = $request->objeto_id;
        $mochila->cantidad = $request->cantidad;

        // Guardar en la base de datos
        $mochila->save();

        // Redirigir a la vista de detalles o a donde desees
        return redirect()->route('mochilas.index', ['mochila' => $mochila->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mochila $mochila)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mochila $mochila)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mochila $mochila)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mochila $mochila)
    {
        DB::table('mochilas')->where('id', '=', $mochila->id)->delete();
        return redirect()->route('mochilas.index')->with('success', 'Se ha eliminado el objeto del inventario.');


    }


}
