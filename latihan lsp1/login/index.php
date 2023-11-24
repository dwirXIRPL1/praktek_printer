<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kotak-login">
        <h1>Login Your Account</h1>

        <form action="process.php" method="post">

            <input type="text" name="username" id="username" placeholder="Username"><br><br>

            <input type="password" name="password" id="password" placeholder="Password"><br><br>

            <button type="submit" name="login">Login</button>
            <p>Belum Punya Akun? <a href="../register/index.php">Daftar Sekarang</a></p>
        </form>
    </div>
</body>
</html>