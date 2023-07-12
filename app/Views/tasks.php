<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>

    <ul>
        <?php foreach ($tasks as $task): ?>
            <li><?= $task['task_name'] ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="/tasks/create">Tambah Tugas</a>

    <a href="/auth/logout">Logout</a>
</body>
</html>
