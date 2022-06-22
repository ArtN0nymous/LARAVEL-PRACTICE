<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regsitro pais</title>
</head>
<body>
    <form action="{{route('pais.insertar')}}" method='post'>
        @csrf
        <h2>Agregar pais</h2>
        <label for="">Nombre:</label>
        <input type="text" name="nombre"><br>
        <label for="">Abreviatura:</label>
        <input type="text" name="abreviatura"><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>