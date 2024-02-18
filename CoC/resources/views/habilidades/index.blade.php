<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')

    <ol class='mt-4 border-8 back'>
        @foreach ($habilidades as $habilidad)
            <li class="p-4 h-auto flex items-center justify-between text-white bg-gradient-to-r from-gray-500 to-green-500">
                <a href="{{ route('habilidades.show', ['habilidade' => $habilidad->id]) }}">
                    {{ $habilidad->habilidad }} | Descripcion: {{ $habilidad->descripcion }}
                </a>
            </li>

        @endforeach
    </ol>
    <a class="bg-gray-500 rounded-md px-4" href="{{ route('habilidades.create') }}">Add Skill</a>



@endsection
