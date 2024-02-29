<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')


@section('content')




<ul class="flex">

    @foreach ($inventarios as $inventario)
        <li class="m-4 border-2 w-[32em] justify-center shadow-2xl p-8 text-white  bg-cyan-700 ">
            <p class="bg-cyan-900  shadow-lg text-black p-2 text-2xl text-center">{{ $inventario->personaje->nombre}} </p>
            <p class="text-black p-1 text-xl text-center">Total objetos:{{ $inventario->objetos->count()}}</p>

            <ul>
                <select class="w-[28em] text-black text-center">
                    @foreach ($inventario->objetos as $objeto)
                    <li><option value={{$objeto}}>{{$objeto->denominacion}}</option><li>
                    @endforeach
                </select>
            </ul>

            <button type="submit" class="bg-white text-black shadow-slate-500 w-24 mt-1 justify-items-center">Agregar</button>
            <button type="submit" class="bg-white text-black shadow-slate-500 w-24 mt-1 text-center">Quitar</button>


        </li>


    @endforeach

</ul>

@endsection
