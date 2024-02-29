
@extends('layouts.app')


@section('content')


<form action="{{ route('personajes.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input accept="image/*" type="file" name="imagen">
    <button type="submit">Subir</button>
</form>




@endsection
