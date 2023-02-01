
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
