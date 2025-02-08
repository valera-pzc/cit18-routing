<!DOCTYPE html>
<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Task List</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Task List</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Add New Task</a>

        <ul class="list-group">
            @foreach($tasks as $task)
                <li class="list-group-item">
                    <strong>{{ $task->title }}</strong> - {{ $task->description }}
                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
