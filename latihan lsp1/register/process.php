<?php

require '../koneksi.php';

$nama_lengkap = htmlspecialchars($_POST["nama_lengkap"]);
$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);
$roles = "Customer";

$query = mysqli_query($conn, "INSERT INTO user VALUES(NULL, '$nama_lengkap', '$username', '$password', '$roles')");

if($query){
    echo "
    <script type='text/javascript'>
    alert('yess register anda berhasil, silahkan login')
    window.location = '../login/index.php';
    </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
    alert('yahh register anda gagal, silahkan coba lagi')
    window.location = 'index.php';
    </script>
    ";
}

?>