<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Aviones</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Modelo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aviones as $avion)
            <tr>
                <td>{{ $avion->id }}</td>
                <td>{{ $avion->nombre }}</td>
                <td>{{ $avion->modelo }}</td>
                <td>
                    <a href="/sturia/plane/edit/{{ $avion->id }}" class="btn btn-primary">Editar</a>
                    <form action="/sturia/plane/delete/{{ $avion->id }}" method="post" class="d-inline-block">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>


