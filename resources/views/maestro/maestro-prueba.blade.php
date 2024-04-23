<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100, initial-scale=1.0">
    <title>Maestros</title>
</head>
<body>
    <h1>Lista de maestros disponibles</h1>
    <ul>
        @foreach($maestros as $maestro)
            <li>{{ $maestro->nombre }} {{ $maestro->apellido }}</li>
        @endforeach
    </ul>
</body>
</html>