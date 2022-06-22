<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista personas</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Esatus</th>
                <th>Teléfono</th>
                <th>Pais</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personas as $persona)
                <tr>
                    <td>{{$persona->nombre}}</td>
                    <td>{{$persona->apellidos}}</td>
                    <td>{{$persona->edad}}</td>
                    <td>{{$persona->estatus}}</td>
                    <td>{{$persona->telefono}}</td>
                    <td>{{$persona->paisN}}</td>
                    <td>
                        <a href="{{route('persona.editar',$persona->id)}}">Editar</a>
                        <form action="{{route('persona.eliminar',$persona->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>