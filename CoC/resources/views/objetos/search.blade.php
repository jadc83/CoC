<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')

<ul>
    @foreach ($objetos as $objeto)
        <li class="mt-4 mb-4">
        {{ $objeto->id }} {{ $objeto->denominacion }}
        </li>
    @endforeach
</ul>

<a class="bg-gray-300 mt-16 p-4 rounded-2xl" href="{{ route('objetos.index') }}" class="btn btn-primary">Volver al índice</a>


@endsection
