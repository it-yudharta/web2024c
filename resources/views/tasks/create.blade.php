<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Baru</title>
</head>
<body>
    <h3>Buat Tugas Baru</h3>
    <form action="/tasks" method="POST">
        @csrf
        <div>
            <label for="title">Judul</label>
            <input id="title" type="text" name="title" required>
        </div>
        <div>
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html>
