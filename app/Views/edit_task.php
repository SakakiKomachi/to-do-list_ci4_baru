<!DOCTYPE html>
<html>
<head>
    <title>Edit Tugas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Tugas</h1>

        <form action="/tasks/update/<?= $task['id'] ?>" method="post" class="mt-4">
            <div class="form-group">
                <label for="task_name">Nama Tugas:</label>
                <input type="text" id="task_name" name="task_name" class="form-control" value="<?= $task['task_name'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
