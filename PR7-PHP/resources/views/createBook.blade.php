@extends('main')

@section('content')
<form action="{{route('store')}}" method="POST" novalidate>
  @csrf
  <label for="author">Autor:</label>
  <input type="text" id="author" name="author" required>

  @error('author')
  <p>{{ $message }}</p>
  @enderror

  <label for="title">Título:</label>
  <input type="text" id="title" name="title" required>

  @error('title')
  <p>{{ $message }}</p>
  @enderror

  <label for="isbn">ISBN:</label>
  <input type="text" id="isbn" name="isbn" required>

  @error('isbn')
  <p>{{ $message }}</p>
  @enderror

  <label for="date_published">Fecha de publicación:</label>
  <input type="date" id="date_published" name="date_published" required>

  @error('date_published')
  <p>{{ $message }}</p>
  @enderror

  <label for="description">Descripción:</label>
  <textarea id="description" name="description" required></textarea>

  @error('description')
  <p>{{ $message }}</p>
  @enderror

  <label for="price">Precio:</label>
  <input type="number" id="price" name="price" required>

  @error('price')
  <p>{{ $message }}</p>
  @enderror

  <input  class="btn btn-primary" type="submit" value="Enviar">
</form>
@endsection