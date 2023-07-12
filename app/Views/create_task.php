<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tugas</title>
</head>
<body>
    <h1>Tambah Tugas</h1>

    <form action="/tasks/store" method="post">
        <div>
            <label for="task_name">Nama Tugas:</label>
            <input type="text" id="task_name" name="task_name" required>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html>
