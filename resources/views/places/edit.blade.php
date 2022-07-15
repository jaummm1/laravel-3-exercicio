<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Locais</title>
</head>
<body>
    <h1>Editar Local</h1>

    <form action="/places/update/{{ $place->id }}" method="post">
        @csrf

        @method('put')
        <input name="name" type="text" value="{{ $place->name }}">
        <input name="description" type="text" value="{{ $place->description }}">
        <input name="address" type="text" value="{{ $place->address }}">
        <button type="submit">Enviar</button>
    </form>

    <form action="/places/delete/{{ $place->id }}" method="get">
        @csrf
        <button type="submit">Deletar</button>
    </form>
</body>
</html>