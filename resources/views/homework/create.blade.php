<!-- resources/views/homework/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Assign Homework</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ url('/homework') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="homework_id">Homework ID</label>
                <input type="text" name="homework_id" class="form-control" id="homework_id" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="due_date">Due Date</label>
                <input type="date" name="due_date" class="form-control" id="due_date" required>
            </div>

            <div class="form-group">
                <label for="subject_name">Subject Name</label>
                <input type="text" name="subject_name" class="form-control" id="subject_name" required>
            </div>

            <div class="form-group">
                <label for="class_id">Class ID</label>
                <input type="text" name="class_id" class="form-control" id="class_id" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Assign Homework</button>
        </form>
    </div>
@endsection
