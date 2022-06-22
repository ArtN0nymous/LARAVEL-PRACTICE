<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
</head>
<body>
    <h2>Piases registrados</h2>
    <table>
        <thead>
            <tr>
                <th>Pais</th>
                <th>Abreviatura</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paises as $pais)
                <tr>
                    <td>{{$pais->nombre}}</td>
                    <td>{{$pais->abreviatura}}</td>
                    <td>
                        <a href="{{route('pais.editar',$pais->pk_pais)}}">Editar</a>
                        <form action="{{route('pais.eliminar',$pais->pk_pais)}}" method="post">
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