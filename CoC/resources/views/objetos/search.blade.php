<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')

@foreach ($objetos as $objeto)
<div class="objeto-list">
    <p>{{ $objeto->denominacion }}</p>
</div>
@endforeach


@endsection
