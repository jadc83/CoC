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
        return redirect()->route('mochilas.index')->with('success', 'Elemento eliminado exitosamente.');


    }


}
