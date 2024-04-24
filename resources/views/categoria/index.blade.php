<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorias</title>
</head>
<body>
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
                <td>{{$reg->activo}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$registros->appends(["texto" => ""])}}
</body>
</html>