<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonajeRequest;
use App\Http\Requests\UpdatePersonajeRequest;
use App\Models\Personaje;
use Illuminate\Http\Request;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personajes = Personaje::paginate(10);

        return view('personajes.index', compact('personajes'));
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
    public function store(StorePersonajeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Personaje $personaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personaje $personaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonajeRequest $request, Personaje $personaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personaje $personaje)
    {
        //
    }

    public function updateStat(Request $request)
    {
        $personajeId = $request->input('personajeId');
        $stat = $request->input('stat');
        $amount = $request->input('amount');

        // Lógica para actualizar la estadística aquí
        $personaje = Personaje::find($personajeId);
        $personaje->$stat += $amount;
        $personaje->save();

        return response()->json(['newValue' => $personaje->$stat]);
    }
}
