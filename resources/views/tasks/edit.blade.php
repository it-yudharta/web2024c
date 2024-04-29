<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Tugas</title>
</head>
<body>
    <h3>Ubah Tugas</h3>
    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf
        @method('put')
        <div>
            <label for="title">Judul</label>
            <input id="title" type="text" name="title" required value="{{ $task->title }}">
        </div>
        <div>
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description">{{ $task->description }}</textarea>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html>
