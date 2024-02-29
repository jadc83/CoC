<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')
@if(isset($mochilas))
<a href="{{ route('mochilas.create') }}" class=" mt-12 p-4 inline-block rounded bg-blue-500 text-white shadow-lg">Crear Mochila</a>

@foreach ($mochilas as $mochila)
    <p class="bg-cyan-700 rounded-lg p-4 m-2 shadow-xl">
        ItemID: {{ $mochila->id}}<br>
        {{ $mochila->inventario->personaje->nombre }}<br>
        {{ $mochila->objeto->denominacion }}:
        {{ $mochila->cantidad }} ud
        <form action="/mochilas/{{ $mochila->id }}" method="POST">
            @csrf
            @method('DELETE')
            <!-- Otros campos del formulario y botones -->
            <button class="inline-block rounded pb-2 pt-2.5 text-xs font-medium uppercase text-white shadow-lg" type="submit" onclick="return confirm('¿Estás seguro de que quieres borrar esta mochila?')">Borrar</button>
        </form>
    </p>
@endforeach
@endif
</ul>
@endsection
