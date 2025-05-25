<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
{{-- <div>
    <form action="/update-task/{{$task->id}}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="title" value="{{$task->title}}">
        <textarea name="task"> {{$task->task}} </textarea>>
        <button type="submit"> Save </button>
    </form>

    <div> --}}

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow border-0 rounded-4 mx-auto" style="max-width: 500px;">
            <div class="card-body p-4">
                <h2 class="card-title text-center text-primary mb-4">Update Task</h2>

                <form action="/update-task/{{ $task->id }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" id="title" name="title" class="form-control form-control-lg"
                            value="{{ $task->title }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="task" class="form-label">Description</label>
                        <textarea id="task" name="task" class="form-control form-control-lg" rows="4" required>{{ $task->task }}</textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
