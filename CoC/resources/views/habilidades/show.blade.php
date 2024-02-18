@extends('layouts.app')

@section('content')
    <div class="w-3/4">
        <p>{{ $habilidad->habilidad }}</p>
        <p>{{ $habilidad->prob }}</p>
        <p>{{ $habilidad->descripcion }}</p>
    </div>
@endsection
