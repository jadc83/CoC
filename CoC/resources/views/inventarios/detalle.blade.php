
@extends('layouts.app')

@section('content')

@if($inventario)
    <p>Detalles del inventario para {{ $inventario->personaje->nombre }}:</p>
    <!-- Agrega más detalles según sea necesario -->
@else
    <p>No hay detalles de inventario disponibles.</p>
@endif


@endsection
