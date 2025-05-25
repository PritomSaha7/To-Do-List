<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="container text-center mt-5">
        <h1 class="mb-4">To-Do List</h1>

        <div class="d-flex justify-content-center gap-3">
            <a href="{{ url('/add-task') }}" class="btn btn-primary btn-lg">Add Task</a>
            <a href="{{ url('/task-list') }}" class="btn btn-success btn-lg">Task List</a>
        </div>
    </div>


</body>
</html>