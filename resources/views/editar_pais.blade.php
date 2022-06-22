<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regsitro pais</title>
</head>
<body>
    <form action="{{route('pais.actualizar',$pk_pais->pk_pais)}}" method='post'>
        @csrf
        @method('put')
        <h2>Editar pais</h2>
        <label for="">Nombre:</label>
        <input type="text" name="nombre" value="{{$pk_pais->nombre}}"><br>
        <label for="">Abreviatura:</label>
        <input type="text" name="abreviatura" value="{{$pk_pais->abreviatura}}"><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>