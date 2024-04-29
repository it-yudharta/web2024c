<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas</title>
</head>
<body>
    <h1>Daftar Tugas</h1>
    <div>
        <a href="/tasks/create">Buat Tugas</a>
    </div>
    <table>
        <tr>
            <th>id</th>
            <th>judul</th>
            <th>deskripsi</th>
            <th>selesai</th>
            <th>Aksi</th>
        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->completed }}</td>
            <td>
                <a href="/tasks/{{ $task->id }}">Edit</a>
                <a href="/tasks/{{ $task->id }}/delete">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
