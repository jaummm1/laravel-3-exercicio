<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Locais</title>
    <style>
        body{
            background-color: rgb(194, 194, 194);
        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 50px;
            display: flex;
            justify-content: center;
            text-transform: uppercase;
        }
        a{
            font-size: 30px;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: space-between;
            flex-direction: row-reverse;
            text-align: center
        }
        nav#menu ul {
            list-style: none;
            text-transform: uppercase;
    }
    nav#menu li {
            display: inline-block;
            background-color: rgb(194, 194, 194);    
            padding: 15px;
            margin: 10px;
            transition: 1s;
    }

    nav#menu li:hover {
            background-color: #606060;
    }

    nav#menu h1 {
            display: none;
    }

    nav#menu a {
            color: rgb(0, 0, 0);
            text-decoration: none;
    }

    footer {
        text-align: center;
        font-size: 25px;

    }

    p {
       
    }
    </style>

</head>
<body>
    <h1>Locais</h1>

    <header>
    <nav id="menu">
    <ul type="">
    <li><a href="/places/create">Criar Local</a></li>

    <br>
    <br>
    
        @foreach ($places as $place)
            <li><a href="/places/show/{{ $place->id }}">{{ $place->name }}</a></li>
            <br>
        @endforeach
    </ul>
    </nav>
</header>

<footer>
    <p>Copyright &copy; 2022 - by Joao Victor <br>
</footer>
</body>
</html>