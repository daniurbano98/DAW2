@extends('main')

@section('content')
    <h1>List of Books</h1>
    <table class="table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ISBN</th>
                <th scope="col">TITLE</th>
                <th scope="col">AUTHOR</th>
                <th scope="col">PUBLISHED_DATE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">PRICE</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->isbn}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->published_date}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->price}}</td>
            </tr>
            @endforeach
            
        </tbody> 
    </table>
    <div class="mt-5">
        {{$books->links()}}
    </div>
    
    @endsection
        
    