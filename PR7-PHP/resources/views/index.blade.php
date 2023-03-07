
    <h1>List of Books</h1>
    <ul>
        @foreach ($books as $book)
            <li>{{$book->title}}</li>
        @endforeach
    </ul>
