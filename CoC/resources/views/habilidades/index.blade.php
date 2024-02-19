<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')

    <div class="mt-4">
        <form action="{{ route('search.habilidad') }}" method="GET">
            <input class="w-80" type="text" name="search" required/>
            <button class="p-2 mt-1 bg-gray-900 text-white" type="submit">Busqueda</button>
        </form>
    </div>


    <ol class='mt-4 border-8'>
        @foreach ($habilidades as $habilidad)
            <li class="p-4 h-auto flex items-center justify-between text-white  bg-cyan-700 ">
                <a href="{{ route('habilidades.show', ['habilidade' => $habilidad->id]) }}">
                    <strong>{{ $habilidad->habilidad }}</strong>: <i>{{ Str::limit($habilidad->descripcion, 30, '...'); }}</i>
                </a>
            </li>

        @endforeach
    </ol>
    <a class="bg-gray-500 rounded-md px-4" href="{{ route('habilidades.create') }}"><p class="w-40 p-2 mt-1 bg-gray-900 text-white text-center">Nueva Habilidad</p></a>



@endsection
