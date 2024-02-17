<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')




<ul class="flex">
    @foreach ($inventarios as $inventario)
        <li class="m-4 w-full justify-center shadow-2xl p-8 rounded-xl bg-teal-700 shadow-slate-500">
            <p class="text-white p-2 text-2xl text-center">{{ $inventario->personaje->nombre}} </p>
            <p class="text-white p-2 text-xl text-center">Vida: {{ $inventario->personaje->HP}} Magia: {{ $inventario->personaje->MP}}</p>
            <ul>
                <li>FUE: {{ $inventario->personaje->FUE }}</li>
                <li>CON:{{ $inventario->personaje->CON }}</li>
                <li>TAM:{{ $inventario->personaje->TAM }}</li>
                <li>DES:{{ $inventario->personaje->DES }}</li>
                <li>APA:{{ $inventario->personaje->APA }}</li>
                <li>INT:{{ $inventario->personaje->INT }}</li>
                <li>POD:{{ $inventario->personaje->POD }}</li>
                <li>EDU: {{ $inventario->personaje->EDU }}</li>
            </ul><br>
            <p class="text-white p-1 text-xl text-center">Inventario:</p>
            <ul>
                @foreach ($inventario->objetos as $objeto)
                    <li class="p-2 h-auto bg-white flex items-center justify-between">
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
