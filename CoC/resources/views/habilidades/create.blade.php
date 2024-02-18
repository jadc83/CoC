<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("habilidades.store")}}" method="POST">
        @csrf

        <label for="habilidad">Habilidad</label>
        <input type="text" name="habilidad" id="habilidad"><br>

        <label for="prob">Probabilidad</label>
        <input type="text" name="prob" id="prob"><br>

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion"></textarea><br>

        <button type="submit">Crear</button>
    </form>
</body>
</html>
