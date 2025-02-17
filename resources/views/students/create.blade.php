<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Add New Student</h1>
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="std_number" class="form-label">Student Number</label>
                <input type="text" class="form-control" id="std_number" name="std_number" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="family_name" class="form-label">Family Name</label>
                <input type="text" class="form-control" id="family_name" name="family_name" required>
            </div>
            <div class="mb-3">
                <label for="dt_birth" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dt_birth" name="dt_birth" required>
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <input type="text" class="form-control" id="level" name="level" required>
            </div>
            <div class="mb-3">
                <label for="picture" class="form-label">Picture</label>
                <input type="file" class="form-control" id="picture" name="picture">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
