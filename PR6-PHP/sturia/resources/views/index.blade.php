

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
                <td>{{ $avion["id"] }}</td>
                <td>{{ $avion["name"] }}</td>
                <td>{{ $avion["model"] }}</td>
                <td>
                    <a href="{{ route('edit', $avion['id']) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('delete', $avion['id']) }}" method="post" class="d-inline-block">
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


