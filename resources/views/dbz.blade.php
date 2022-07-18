<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dbz</title>
</head>
<body>
    
    @if($energy >= 8000)
        <h1>Mais de 8000!</h1>
    @endif
    @if($energy < 8000)
    <h1>Inseto!</h1>
    @endif
     
</body>
</html>