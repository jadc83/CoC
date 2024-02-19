<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')
<div class="mt-4">
    <form action="{{ route('search.objeto') }}" method="GET">
        <input type="text" name="search" required/>
        <button class="p-2 mt-1 bg-gray-900 text-white" type="submit">Busqueda</button>
    </form>
</div>


    <ol class='mt-4 border-8 back'>
        @foreach ($objetos as $objeto)
            <li class="p-4 h-auto flex items-center justify-between text-white  bg-cyan-700 ">
                <span>{{ $objeto->id }}  {{ $objeto->denominacion }}</span>
            </li>
        @endforeach
    </ol>

    <div class="d-flex justify-content-center mt-4">
        {{ $objetos->links('pagination::bootstrap-4') }}
    </div>
@endsection
