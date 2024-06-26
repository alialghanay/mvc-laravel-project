@extends('layouts.app')

@section('content')
<div class="container">
<h4>Dashboard</h4>
    <div class="mb-3">
        <a class="btn btn-primary" href="/add-student">Add New Student</a>
        <button class="btn btn-danger ml-3" onclick="deleteAllStudents()">Delete All Students</button>
    </div>
    @if(!is_null($students) && count($students) > 0)
        @foreach($students as $student)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->name }}</h5>
                    <p class="card-text">
                        Age: {{ $student->address }}
                    </p>
                    <p class="card-text">
                        Address: {{ $student->age }}
                    </p>
                </div>
            </div>
        @endforeach
    @else
        <p>No students found.</p>
    @endif
    @vite('resources/js/app.js')

</div>
@endsection