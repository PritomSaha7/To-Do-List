<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-4 text-primary">Task List</h1>
        <div class="text-center mt-4" style = "margin: 10px">
            <a href="/home" class="btn btn-primary">Go to Home</a>
        </div>

        @foreach ($tasks as $task)
            <div class="card mb-4 shadow-sm border-0">
                <div class="card-body">
                    <h3 class="card-title text-dark">{{ $task->title }}</h3>
                    <p class="card-text text-secondary">{{ $task->task }}</p>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="/edit-task/{{ $task->id }}" class="btn btn-outline-primary btn-sm">Edit</a>

                        <form action="/delete-task/{{ $task->id }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this task?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
