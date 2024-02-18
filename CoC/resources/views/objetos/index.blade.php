<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')

    <ol class='mt-4 border-8 back'>
        @foreach ($objetos as $objeto)
            <li class="p-4 h-auto flex items-center justify-between text-white bg-gradient-to-r from-gray-500 to-green-500">
                <span>{{ $objeto->id }}  {{ $objeto->denominacion }}</span>
            </li>
        @endforeach
    </ol>

    <div class="d-flex justify-content-center mt-4">
        {{ $objetos->links('pagination::bootstrap-4') }}
    </div>




@endsection
