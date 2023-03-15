@extends('main')

@section('title')
    SEARCH BOOK
@endsection


@section('content')
    <form class="form-group container" action="{{ route('resultSearchForm') }}" method="POST" novalidate>
        @csrf
        <label for="category" class="form-label">Category:</label>
        <select name="category_id" id="category" class="form-control mb-1">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="id" class="form-label">ID:</label>
        <input type="text" class="form-control" id="id" name="id" value=""
            placeholder="Ingrese el ID del libro">


        <label for="isbn" class="form-label">ISBN:</label>
        <input type="text" class="form-control" id="isbn" name="isbn" value=""
            placeholder="Ingrese el ISBN del libro">


        <label for="title" class="form-label">TITLE:</label>
        <input type="text" class="form-control" id="title" name="title" value=""
            placeholder="Ingrese el título del libro">


        <label for="author" class="form-label">AUTHOR:</label>
        <input type="text" class="form-control" id="author" name="author" value=""
            placeholder="Ingrese el nombre del autor del libro">

        <button type="submit" class="btn btn-primary  mt-5">Submit</button>
    </form>
@endsection
