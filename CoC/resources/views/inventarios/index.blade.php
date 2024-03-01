<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="flex flex-wrap">
        @foreach ($inventarios as $inventario)
            <div class="flex flex-col m-4 border-2 w-[32em] justify-center shadow-2xl text-white bg-cyan-700">
                <p class="bg-cyan-900 shadow-lg text-black p-2 text-2xl text-center">{{ $inventario->personaje->nombre }}</p>
                <div class="p-8">
                    <p class="text-black p-1 text-xl text-left">Total objetos: {{ $inventario->objetos->count() }}</p>

                    <div class="object-frame" style="height: 60vh; overflow: auto;">
                        @foreach ($inventario->objetos as $objeto)
                            <p>{{ $objeto->denominacion }}</p>
                            <!-- Add more details or customize the display as needed -->
                        @endforeach
                    </div>

                    <button type="submit" class="bg-white text-black shadow-slate-500 w-24 mt-1 justify-items-center">Agregar</button>
                    <button type="submit" class="bg-white text-black shadow-slate-500 w-24 mt-1 text-center">Quitar</button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
