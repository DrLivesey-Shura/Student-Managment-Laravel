@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Students List</h1>
        @if (auth()->user()->role === 'admin')
            <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>
        @endif
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Student Number</th>
                    <th>Name</th>
                    <th>Family Name</th>
                    <th>Date of Birth</th>
                    <th>Level</th>
                    <th>Picture</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->std_number }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->family_name }}</td>
                        <td>{{ $student->dt_birth }}</td>
                        <td>{{ $student->level }}</td>
                        <td>
                            @if ($student->picture)
                                <img src="{{ asset('storage/' . $student->picture) }}" alt="Student Picture" width="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                            @if (auth()->user()->role === 'admin')
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
