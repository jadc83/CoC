
@extends('layouts.app')


@section('content')

    <form action="{{ route('mochilas.store') }}" method="post">
        @csrf
        <label for="inventario_id">¿En qué inventario irá?</label>
        <select id="inventario_id" name="inventario_id" required>
            <!-- Simulación de datos de inventarios -->
            @php
                $inventarios = App\Models\Inventario::all();
            @endphp
            @foreach ($inventarios as $inventario)
                <option value="{{ $inventario->id }}">{{ $inventario->personaje->nombre }}</option>
            @endforeach
        </select>

        <label for="objeto_id">¿Qué objeto quieres añadir?</label>
        <select id="objeto_id" name="objeto_id" required>
            @php
                $objetos = App\Models\Objeto::all();
            @endphp
            @foreach ($objetos as $objeto)
                <option value="{{ $objeto->id }}">{{ $objeto->denominacion }}</option>
            @endforeach
        </select>

        <label for="cantidad">¿Cuántos?</label>
        <input type="text" id="cantidad" name="cantidad" required>

        <button type="submit">Añadir</button>
    </form>

@endsection
