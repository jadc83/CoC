<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')




<ul class="flex">
    @foreach ($inventarios as $inventario)
        <li class="m-4 w-full justify-center shadow-2xl p-8 rounded-xl text-white bg-gradient-to-r from-gray-300 to-green-200">
            <p class="text-black p-2 text-2xl text-center">{{ $inventario->personaje->nombre}} </p>

            <p class="text-black p-1 text-xl text-center">Inventario:</p>
            <ul>
                @foreach ($inventario->objetos as $objeto)
                    <li class="p-2 h-auto bg-white text-black flex items-center justify-between">
                        <span>{{ $objeto->denominacion }}</span>
                        <div class="flex items-center">
                            <span>{{ $objeto->pivot->cantidad }}</span>

                        </div>
                    </li>

                @endforeach

            </ul>
            <button type="submit" class="bg-white shadow-slate-500 w-24 mt-1 justify-items-center">-</button>
            <button type="submit" class="bg-white shadow-slate-500 w-24 mt-1 text-center">+</button>
        </li>


    @endforeach

</ul>

@endsection
