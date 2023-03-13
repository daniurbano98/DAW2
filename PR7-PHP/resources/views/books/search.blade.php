@extends('main')

@section('title')
    SEARCH BOOK
@endsection


@section('content')
    <form>
        @csrf
        <form>
            <label for="category">Category:</label>
            <select name="category_id" id="category" class="mb-5 mt-3">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" id="id" placeholder="Ingrese el ID del libro">
            </div>
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" class="form-control" id="isbn" placeholder="Ingrese el ISBN del libro">
            </div>
            <div class="form-group">
                <label for="title">TTITLE:</label>
                <input type="text" class="form-control" id="title" placeholder="Ingrese el título del libro">
            </div>
            <div class="form-group">
                <label for="author">AUTHOR:</label>
                <input type="text" class="form-control" id="author" placeholder="Ingrese el nombre del autor del libro">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </form>
@endsection