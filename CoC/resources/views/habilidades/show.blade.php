@extends('layouts.app')

@section('content')

    <div class="w-[110rem] p-4 mt-4 object-center text-white text-center bg-cyan-700 ">
        <p class="p-4 text-3xl">{{ $habilidad->habilidad }}</p>
        <p class="p-4 text-3xl">{{ $habilidad->prob }}%</p>
        <p class="p-4 text-3xl">{{ $habilidad->descripcion }}</p>
    </div>

@endsection
