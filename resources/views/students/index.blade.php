<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Students List</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
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
                                <img src="{{ asset('storage/' . $student->picture) }}" alt="Student Picture"
                                    width="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('students.edit', $student->id) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
