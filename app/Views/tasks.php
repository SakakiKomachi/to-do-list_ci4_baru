<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">To-Do List</h1>

        <ul class="list-group mt-4">
            <?php foreach ($tasks as $task): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $task['task_name'] ?>
                    <div>
                        <a href="/tasks/edit/<?= $task['id'] ?>" class="btn btn-primary btn-sm mr-2">Edit</a>
                        <a href="/tasks/delete/<?= $task['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

        <a href="/tasks/create" class="btn btn-success mt-4">Tambah Tugas</a>

        <a href="/auth/logout" class="btn btn-secondary mt-4">Logout</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
