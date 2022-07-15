<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Locais</title>
</head>
<body>
    <h1>Locais</h1>
    <a href="/places/create">Criar Local</a>

    <br>
    <br>
    
        @foreach ($places as $place)
            <a href="/places/show/{{ $place->id }}">{{ $place->name }}</a>
            <br>
        @endforeach
    
</body>
</html>