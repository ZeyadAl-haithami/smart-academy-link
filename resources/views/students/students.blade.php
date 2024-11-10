@extends('layouts.app')

@section('content')
    <h1>Student List</h1>
    <ul>
        @foreach($students as $student)
            <li>{{ $student['name'] }} - Class: {{ $student['class'] }}</li>
        @endforeach
    </ul>
@endsection
