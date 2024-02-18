<?php

namespace App\Http\Controllers;
use App\Models\Habilidad;
use Illuminate\Http\Request;

class HabilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("habilidades.index", ["habilidades"=>Habilidad::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("habilidades.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'habilidad' => 'required|string|max:50',
            'prob' => 'required|numeric',
            'descripcion' => 'nullable|string|max:900',
        ]);

        // Crear una nueva instancia del modelo y asignar valores
        $habilidad = new Habilidad();
        $habilidad->habilidad = $request->input('habilidad');
        $habilidad->prob = $request->input('prob');
        $habilidad->descripcion = $request->input('descripcion');

        // Guardar en la base de datos
        $habilidad->save();

        // Redirigir a la vista de detalles o a donde desees
        return redirect()->route('habilidades.index', ['habilidad' => $habilidad->id]);
    }
    /**
     * Display the specified resource.
     */
// HabilidadController@show
    public function show($habilidade)
    {
        $habilidad = Habilidad::findOrFail($habilidade);
        return view('habilidades.show', ['habilidad' => $habilidad]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habilidad $habilidad)
    {
        return view('habilidades.edit', ['habilidad'=>$habilidad]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Habilidad $habilidad)
    {
        $habilidad->update(['habilidad'=>$request->habilidad]);
        return redirect()->route('habilidades.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habilidad $habilidad)
    {
        Habilidad::destroy($habilidad->id);
        return redirect()->route('habilidades.index');
    }
}
