<?php 

require '../function.php';

$produk = query("SELECT * FROM produk");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Produk</title>
    </head>
<body>
    <?php require '../layout/sidebar.php'; ?>
        <div class="main">
        <h1>Data Produk Toko Printer</h1>
        <a href="tambah_siswa.php">Tambah Data</a>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>NO</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
            <?php $no = 1;?>
            <?php foreach($produk as $data) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td><?= $data["harga"]; ?></td>
                <td><img src="../assets/images/<?= $data["foto"]; ?>" alt="" width="80"></td>
                <td><?= $data["stok"]; ?></td>
                <td><?= $data["deskripsi"]; ?></td>
                <td>
                    <a href="edit_siswa.php?id=<?= $data["id_produk"]; ?>">Edit</a>
                    <a href="hapus_siswa.php?id=<?= $data["id_produk"]; ?>" onClick="return confirm('Anda Yakin Ingin Menghapus?');">Hapus</a>
                </td>
            </tr>
            <?php $no++ ;?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>