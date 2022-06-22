<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar persona</title>
</head>
<body>
    <form action="{{route('persona.actualizar',$per->id)}}" method='post'>
        @csrf
        @method('put')
        <h2>Editar persona</h2>
        <label for="">Nombre:</label>
        <input type="text" name="nombre" value="{{$per->nombre}}"><br>
        <label for="">Apellidos:</label>
        <input type="text" name="abreviatura" value="{{$per->apellido}}"><br>
        <label for="">Edad</label>
        <input type="number" value="{{$per->edad}}"><br>
        <label for="">Telefono</label>
        <input type="text" value="{{$per->telefono}}"><br>
        <label for="">Pais</label>
        <select name="" id="">
            @foreach($paises as $pais)
                @if($pais->pk_pais==$per->fk_pais)
                    <option value="{{$pais->pk_pais}}" selected>{{$pais->nombre}}</option>
                @else
                    <option value="{{$pais->pk_pais}}">{{$pais->nombre}}</option>
                @endif
            @endforeach
        </select>
    </form>
</body>
</html>