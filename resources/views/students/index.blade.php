<!-- resources/views/students/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Student List</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->class }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
