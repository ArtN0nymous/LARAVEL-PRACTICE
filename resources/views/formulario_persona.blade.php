<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PERSONAS</title>
</head>
<body>
    <form action="{{route('persona.insertar')}}" method="post">
        @csrf
        <h2>REGISTRO DE PERSONAS</h2>
        <label for="">Nombre:</label>
        <input type="text" name='nombre'><br>
        <label for="">Apellidos:</label>
        <input type="text" name='apellidos'><br>
        <label for="">Edad:</label>
        <input type="number" name='edad'><br>
        <label for="">Pais:</label>
        <select name="fk_pais" id="">
            <option value="">Selecciona un pais</option>
            @foreach ($paises as $pais)
                <option value="{{$pais->pk_pais}}">{{$pais->nombre}}</option>
            @endforeach
        </select> <br>
        <label for="">Teléfono</label>
        <input type="text" name='telefono'><br>
        <input type="submit" name="" id="" value="GUARDAR">
    </form>
</body>
</html>