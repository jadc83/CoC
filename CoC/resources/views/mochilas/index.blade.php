<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')

@if(isset($mochilas))
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
            <button class="inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-600 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]" type="submit" onclick="return confirm('¿Estás seguro de que quieres borrar esta mochila?')">Borrar</button>
        </form>
    </p>
@endforeach
@endif
</ul>

@endsection
