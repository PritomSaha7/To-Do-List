<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Add Task </title>
</head>
<body>
    <body class="bg-light">

      <div class="container mt-5">
          <div class="card border-pink shadow-sm" style="border: 3px solid pink;">
              <div class="card-body">
                  <h1 class="card-title text-center mb-4" style="color: hotpink;">Add Task</h1>
  
                  <form action="/save-task" method="POST">
                      @csrf
  
                      <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" id="title" name="title" class="form-control" placeholder="Add title" required>
                      </div>
  
                      <div class="mb-3">
                          <label for="task" class="form-label">Description</label>
                          <textarea id="task" name="task" class="form-control" rows="4" placeholder="Add description" required></textarea>
                      </div>
  
                      <div class="text-center">
                          <button type="submit" class="btn btn-primary px-5">Save</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  
  </body>
</body>
</html>