<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Student Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $student->name }} {{ $student->family_name }}</h5>
                <p class="card-text"><strong>Student Number:</strong> {{ $student->std_number }}</p>
                <p class="card-text"><strong>Date of Birth:</strong> {{ $student->dt_birth }}</p>
                <p class="card-text"><strong>Level:</strong> {{ $student->level }}</p>
                @if ($student->picture)
                    <img src="{{ asset('storage/' . $student->picture) }}" width="100" class="img-thumbnail">
                @else
                    <p>No Image</p>
                @endif
            </div>
        </div>
        <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
