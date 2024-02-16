<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')


    <ul>
        @foreach ($inventarios as $inventario)
            <li class="m-4 justify-center shadow-2xl p-8 rounded-xl bg-teal-700">
                <p class="text-white p-2">Inventario de {{ $inventario->personaje->nombre }}</p>
                <ul>
                    @foreach ($inventario->objetos as $objeto)
                        <li>{{ $objeto->denominacion }}, {{ $objeto->pivot->cantidad }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
