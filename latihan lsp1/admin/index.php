<?php
session_start();

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('silahkan login terlebih dahulu');
        window.location = '../login/index.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        h1{
            margin-left: 550px;
            padding-top: 250px;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<?php require '../layout/sidebar.php'; ?>
    <h1>Haloo, selamat datang <?= $_SESSION['nama_lengkap']; ?></h1>
</body>
</html>