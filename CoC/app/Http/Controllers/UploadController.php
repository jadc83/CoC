<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NombreTabla;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagen = $request->file('imagen');
        $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
        $imagen->move(public_path('uploads'), $nombreImagen);

        return redirect()->route('personajes.index')->with('success', 'Imagen subida correctamente.');
    }
}
