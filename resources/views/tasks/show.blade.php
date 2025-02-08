<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Task Details</title>
</head>
<body>
    <h1>Task Details</h1>

    <p><strong>Title:</strong> {{ $task->title }}</p>
    <p><strong>Description:</strong> {{ $task->description ?? 'No description available' }}</p>
    <p><strong>Status:</strong> {{ $task->is_completed ? 'Completed' : 'Not Completed' }}</p>

    <a href="{{ route('tasks.index') }}">Back to List</a>
</body>
</html>
