<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $task->description }}</textarea>
        <br>
        <label for="is_completed">
            <input type="checkbox" name="is_completed" id="is_completed" {{ $task->is_completed ? 'checked' : '' }}> Completed
        </label>
        <br>
        <button type="submit">Update Task</button>
    </form>
</body>
</html>
