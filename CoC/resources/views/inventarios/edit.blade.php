<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <form action="{{ route('inventarios.update', $inventario) }}" method="post">
        @csrf
        @method("PUT")
        <label for="id_jugador">ID_jugador</label>
        <input type="text" id="id_jugador" name="id_jugador" value="{{$inventario->personaje->id}}">
        <button type="submit">Aceptar</button>
    </form>
</body>
</html>
