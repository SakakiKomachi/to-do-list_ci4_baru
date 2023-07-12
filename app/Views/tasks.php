<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .task-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Tasks</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="/tasks/store" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="task_name" class="form-control" placeholder="Add a task" required>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Add</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 text-right">
                <a href="/auth/logout" class="btn btn-danger">Logout</a>
            </div>
        </div>
        <div class="row">
            <?php foreach ($tasks as $task): ?>
                <div class="col-md-4">
                    <div class="task-card">
                        <h4><?= $task['task_name']; ?></h4>
                        <hr>
                        <div class="text-right">
                            <a href="/tasks/edit/<?= $task['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="/tasks/delete/<?= $task['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Tambahkan script JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
