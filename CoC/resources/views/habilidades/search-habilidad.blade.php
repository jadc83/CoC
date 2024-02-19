<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')

<ul>
    @foreach ($habilidades as $habilidad)
        <li class="mt-4 mb-4">
        {{ $habilidad->habilidad }} {{ $habilidad->descripcion }}
        </li>
    @endforeach
</ul>

<a class=" bg-cyan-700  mt-16 p-4 rounded-2xl" href="{{ route('habilidades.index') }}" class="btn btn-primary">Volver al índice</a>


@endsection
