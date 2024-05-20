<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h4>Login</h4>
    <form action="/login" method="POST">
        @csrf
        <div>
            <label for="email">Email</label>
            <input id="email" type="text" name="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html>
