<!DOCTYPE html>
<html>
<head>
    <title>Students & Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1 class="mb-4 text-center text-primary">📘 Students & Their Courses</h1>

    @foreach($students as $student)
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h4>{{ $student->name }}</h4>
                <p>
                    <strong>Courses:</strong>
                    @foreach($student->courses as $course)
                        <span class="badge bg-success">{{ $course->title }}</span>
                    @endforeach
                </p>
            </div>
        </div>
    @endforeach
</div>
</body>
</html>