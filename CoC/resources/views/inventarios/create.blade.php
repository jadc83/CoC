<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="{{ route('inventarios.store') }}" method="post">
        @csrf
        <label for="id_jugador">ID del Jugador</label>
        <input type="text" id="id_jugador" name="id_jugador">

        <button type="submit">Añadir</button>
    </form>

</body>
</html>
