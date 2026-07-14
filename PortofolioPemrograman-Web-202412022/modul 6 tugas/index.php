<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>

<h2>Data Produk</h2>

<a href="tambah.php">Tambah Produk Baru</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

<?php while($d = mysqli_fetch_assoc($data)){ ?>

<tr>
    <td><?php echo $d['id_produk']; ?></td>
    <td><?php echo $d['nama_produk']; ?></td>
    <td><?php echo $d['harga']; ?></td>
    <td><?php echo $d['stok']; ?></td>
    <td>
        <a href="edit.php?id_produk=<?php echo $d['id_produk']; ?>">Edit</a>
        |
        <a href="hapus.php?id_produk=<?php echo $d['id_produk']; ?>"
        onclick="return confirm('Yakin ingin menghapus data?')">
        Hapus
        </a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>