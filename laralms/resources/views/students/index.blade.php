@extends('layout')
@section('content')
<h1>All students</h1>
<ul>
    @foreach ($students as $student)
        <li>
            {{ $student -> fname }} {{ $student -> lname }} |
            <a href="{{ route('students.edit', $student -> id )}}">Edit</a>
        </li>
    @endforeach
</ul>

@endsection