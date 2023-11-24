<?php

session_start();
unset($_SESSION["username"]);
session_destroy();

echo "
    <script type='text/javascript'>
        alert('yeyy anda berhasil logout');
        window.location = 'index.php';
    </script>8
"

?>