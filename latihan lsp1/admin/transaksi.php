<?php 

require '../function.php';

$transaksi = query("SELECT * FROM transaksi");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Transaksi</title>
    </head>
<body>
    <?php require '../layout/sidebar.php'; ?>
        <div class="main">
        <h1>Data Transaksi Toko Printer</h1>
        <a href="tambah_siswa.php">Tambah Data</a>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>NO</th>
                <th>Nama Pembeli</th>
                <th>Alamat</th>
                <th>Nomor Telephone</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Total Harga</th>
                <th>Roles</th>
                <th>Aksi</th>
            </tr>
            <?php $no = 1;?>
            <?php foreach($transaksi as $data) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data["nama_pembeli"]; ?></td>
                <td><?= $data["alamat"]; ?></td>
                <td><?= $data["no_hp"]; ?></td>
                <td><?= $data["nama_barang"]; ?></td>
                <td><?= $data["jumlah_barang"]; ?></td>
                <td><?= $data["total_harga"]; ?></td>
                <td><?= $data["roles"]; ?></td>
                <td>
                    <a href="edit_siswa.php?id=<?= $data["id_transaksi"]; ?>">Edit</a>
                    <a href="hapus_siswa.php?id=<?= $data["id_transaksi"]; ?>" onClick="return confirm('Anda Yakin Ingin Menghapus?');">Hapus</a>
                </td>
            </tr>
            <?php $no++ ;?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>