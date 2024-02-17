<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')

<form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" required/>
    <button type="submit">Buscar</button>
</form>

<div class='rounded-xl bg-gray-200'>
    <ul class='mt-4'>
        @foreach ($objetos as $objeto)
            <li class="p-2 h-auto flex items-center justify-between">
                <span>id {{ $objeto->id }}  {{ $objeto->denominacion }}</span>
            </li>
        @endforeach
    </ul>
</div>


@endsection
