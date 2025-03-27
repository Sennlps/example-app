<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers List</title>
</head>
<body>
    <h1>Teachers</h1>
    <ul>
        @foreach ($teachers as $teacher)
            <li>{{ $teacher->name }} - {{ $teacher->hobbies }}</li>
        @endforeach
    </ul>
    <a href="{{ route('teachers.create') }}">Add New Teacher</a>
</body>
</html>
