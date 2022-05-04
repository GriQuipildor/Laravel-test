<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h2>Editar estudiante</h2>
    <form method="POST" action="{{route('student.update', $estudiante->id)}}">
        @csrf
        Nombre <input type="text" name="nombre" value="{{$estudiante->nombre}}"> <br><br>
        Apellido <input type="text" name="apellido" value="{{$estudiante->apellido}}"> <br><br>
        DNI <input type="number" name="dni" required value="{{$estudiante->dni}}"> <br><br>
        Correo electrónico <input type="text" name="email" value="{{$estudiante->email}}"required> <br><br>
        Contraseña <input type="password" name="password" value="{{$estudiante->password}}"><br><br>
        <input type="submit" name="Enviar"> 
        @method('PUT')
    </form>
</body>
</html>