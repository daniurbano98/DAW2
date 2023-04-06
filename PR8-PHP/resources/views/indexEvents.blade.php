@extends('main')

@section('title')
    Perfil: {{$user->name}}
@endsection

@section('content')
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Location</th>
            <th>Date</th>
            <th>User</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->description }}</td>
                <td>{{ $event->location }}</td>
                <td>{{ $event->date }}</td>
                <td>{{ $event->user->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection