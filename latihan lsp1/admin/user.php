<?php 

require '../function.php';

$user = query("SELECT * FROM user");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data User</title>
    </head>
<body>
    <?php require '../layout/sidebar.php'; ?>
        <div class="main">
        <h1>Data User Toko Printer</h1>
        <a href="tambah_siswa.php">Tambah Data</a>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>NO</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Password</th>
                <th>Roles</th>
                <th>Aksi</th>
            </tr>
            <?php $no = 1;?>
            <?php foreach($user as $data) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["username"]; ?></td>
                <td><?= $data["password"]; ?></td>
                <td><?= $data["roles"]; ?></td>
                <td>
                    <a href="edit_siswa.php?id=<?= $data["id_user"]; ?>">Edit</a>
                    <a href="hapus_siswa.php?id=<?= $data["id_user"]; ?>" onClick="return confirm('Anda Yakin Ingin Menghapus?');">Hapus</a>
                </td>
            </tr>
            <?php $no++ ;?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>