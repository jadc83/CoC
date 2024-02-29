<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')

@section('content')

<ul class="flex">
    @foreach ($personajes as $personaje)
        <li class="m-4 w-96 justify-center border-2 shadow-2xl p-8 text-white bg-cyan-700">
            <p class="text-black p-2 text-2xl text-center">{{$personaje->nombre}}</p>
            <p class="text-black p-2 text-xl text-center">Hp: <span class="text-white">{{ $personaje->HP}}</span> Mp:<span class="text-white">{{ $personaje->MP}}</span></p>
            <ul>
                <li>FUE: {{ $personaje->FUE }}</li>
                <li>CON:{{ $personaje->CON }}</li>
                <li>TAM:{{ $personaje->TAM }}</li>
                <li>DES:{{ $personaje->DES }}</li>
                <li>APA:{{ $personaje->APA }}</li>
                <li>INT:{{ $personaje->INT }}</li>
                <li>POD:{{ $personaje->POD }}</li>
                <li>EDU: {{ $personaje->EDU }}</li>
                <li class="mt-8">
                    <form id="formularioImagen" action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input accept="image/*" type="file" name="imagen" id="inputImagen" onchange="submitForm()" style="display: none;">
                        <label for="inputImagen" class="cursor-pointer bg-blue-500 text-white px-4 py-2 rounded-md">Selecciona avatar</label>
                    </form>
                    <script>
                        function submitForm() {
                            // Envía el formulario al seleccionar una imagen
                            document.getElementById('formularioImagen').submit();
                        }
                    </script>
                </li>
            </ul>
        </li>
    @endforeach
</ul>

@endsection
