@extends('layouts.app')

@section('content')

    <div class="p-4 object-center text-white bg-cyan-700 ">
        <p class="p-4">{{ $habilidad->habilidad }}</p>
        <p class="p-4 text-xl">{{ $habilidad->prob }}%</p>
        <p class="p-4">{{ $habilidad->descripcion }}</p>
    </div>

@endsection
