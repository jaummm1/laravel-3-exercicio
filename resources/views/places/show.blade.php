<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local</title>
</head>
<body>
    <h1>Local</h1>
    <ul>
    <li>Nome: {{ $place->name }}</li>
    <li>Descrição: {{ $place->description }}</li>
    <li>Endereço: {{ $place->address }}</li>
    </ul>
    <a href="/places/edit/{{ $place->id }}">Editar</a>
</body>
</html>