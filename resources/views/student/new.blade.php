<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nuevo Estudiante</h1>
    <form action="/student/new" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button type="submit">Enviar</button>
    </form>
</body>
</html>