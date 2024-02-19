<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')

    <div class="mt-4 mb-6">
        <form action="{{ route('search.habilidad') }}" method="GET">
            <input class="w-80" type="text" name="search" required/>
            <button class="p-2 mt-1 bg-gray-900 text-white" type="submit">Busqueda</button>
        </form>
    </div>


    <ol class='mt-4 border-2'>
        @foreach ($habilidades as $habilidad)
            <li class="p-2 h-auto flex items-center justify-between text-white  bg-cyan-700 ">
                <a href="{{ route('habilidades.show', ['habilidade' => $habilidad->id]) }}">
                    <strong>{{ $habilidad->habilidad }}</strong>: <i>{{ Str::limit($habilidad->descripcion, 30, '...'); }}</i>
                </a>
            </li>

        @endforeach
    </ol>
    <div class="mt-6">
        <a class="bg-black text-white p-4" href="{{ route('habilidades.create') }}">Nueva habilidad</a>
    </div>




@endsection
