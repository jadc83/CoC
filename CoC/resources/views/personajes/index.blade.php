<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')

<ul class="flex">
    @foreach ($personajes as $personaje)
        <li class="m-4 w-96 justify-center shadow-2xl p-8 rounded-xl text-white bg-gray-400">
            <p class="text-black p-2 text-2xl text-center">{{$personaje->nombre}}</p>
            <p class="text-black p-2 text-xl text-center">Hp: <span class="text-green-700">{{ $personaje->HP}}</span> Mp:<span class="text-blue-700">{{ $personaje->MP}}</span></p>
            <ul>
                <li>FUE: {{ $personaje->FUE }}</li>
                <li>CON:{{ $personaje->CON }}</li>
                <li>TAM:{{ $personaje->TAM }}</li>
                <li>DES:{{ $personaje->DES }}</li>
                <li>APA:{{ $personaje->APA }}</li>
                <li>INT:{{ $personaje->INT }}</li>
                <li>POD:{{ $personaje->POD }}</li>
                <li>EDU: {{ $personaje->EDU }}</li>
            </ul>
        </li>
    @endforeach

</ul>

@endsection
