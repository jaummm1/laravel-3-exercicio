<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Locais</title>
</head>
<body>
    <h1>Criar Local</h1>
    <form action="/places/store" method="post">
        @csrf
        <input name="name" type="text" placeholder="Nome">
        <input name="description" type="text" placeholder="Descrição">
        <input name="address" type="text" placeholder="Endereço">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>