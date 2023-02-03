<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Editar Avión</h1>
        <form action="{{route('update',$avion['id'])}}" method="post">
            @method('PUT')
            @csrf
            
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $avion['name'] }}">
            </div>
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" name="model" id="model" class="form-control" value="{{ $avion['model'] }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
    
</body>
</html>

