<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Task</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="/tasks/update/<?= $task['id']; ?>" method="post">
                    <div class="form-group">
                        <label for="task_name">Task Name</label>
                        <input type="text" name="task_name" class="form-control" value="<?= $task['task_name']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/tasks" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Tambahkan script JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
