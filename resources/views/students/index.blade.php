<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h3>Estudiantes</h3>
    <table border="1px">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Correo Electrónico</th>
            <th colspan=2>Opciones</th>
        </tr>

        @foreach ($estudiantes as $estudiante)
            <tr>
                <td>{{$estudiante->nombre}}</td> 
                <td>{{$estudiante->apellido}}</td>
                <td>{{$estudiante->dni}}</td>
                <td>{{$estudiante->email}}</td>
                <td><a href="/student/{{$estudiante->id}}/edit">Editar</a></td>
                <td>
                    <form method="POST" action="{{route('student.destroy', $estudiante->id)}}">
                        @csrf
                        @method('DELETE') 
                        <button type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table> <br><br>

    <!-- test -->
    <!--  doble llave para dirigirme a la ruta...route es un helper -->
    <h3>Nuevo estudiante</h3>
    <form method="POST" action="{{route('student.store')}}">
        <!-- genera un token -->
        @csrf
        Nombre <input type="text" name="nombre"> <br><br>
        Apellido <input type="text" name="apellido"> <br><br>
        DNI <input type="number" name="dni" min="0" max="99999999" required> <br><br>
        Correo electrónico <input type="text" name="email" required> <br><br>
        Contraseña <input type="password" name="password"><br><br>
        <input type="submit" name="Enviar"> 
    </form>
</body>
</html>