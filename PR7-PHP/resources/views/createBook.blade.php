@extends('main')

@section('content')
<form method="POST">
  @csrf
  <label for="author">Autor:</label>
  <input type="text" id="author" name="author" required>

  <label for="title">Título:</label>
  <input type="text" id="title" name="title" required>

  <label for="isbn">ISBN:</label>
  <input type="text" id="isbn" name="isbn" required>

  <label for="fecha_publicacion">Fecha de publicación:</label>
  <input type="date" id="fecha_publicacion" name="fecha_publicacion" required>

  <label for="descripcion">Descripción:</label>
  <textarea id="descripcion" name="descripcion" required></textarea>

  <label for="precio">Precio:</label>
  <input type="number" id="precio" name="precio" required>

  <input type="submit" value="Enviar">
</form>
@endsection