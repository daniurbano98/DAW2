@extends('main')

@section('title')
  DELETE BOOK
@endsection

@section('content')
    <form class="form-group container" action="{{route('destroy')}}" method="POST" novalidate>
        @foreach ($books as $book)
        <select value="{{$book->id}}"></select>
        @endforeach

    </form>
@endsection