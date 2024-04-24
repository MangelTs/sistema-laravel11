<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorias</title>
</head>
<body>
    <form action="{{route('categoria.index')}}" method="get">
        <label for="">Buscar:</label>
        <input type="text" name="texto" value="{{$texto}}">
        <input type="submit" value="Buscar">
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $reg)
            <tr>
                <td>{{$reg->id}}</td>
                <td>{{$reg->nombre}}</td>
                <td>{{$reg->activo?'Activo':'Inactivo'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$registros->appends(["texto" => $texto])}}
</body>
</html>