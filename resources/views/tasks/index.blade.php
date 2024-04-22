<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas</title>
</head>
<body>
    <h1>Daftar Tugas</h1>

    <table>
        <tr>
            <th>id</th>
            <th>judul</th>
            <th>deskripsi</th>
            <th>selesai</th>
        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->completed }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
