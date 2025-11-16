<?php
// koneksi ke database
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alamat Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach($mahasiswa as $row):?>
    <tr>
        <td><?= $i;?></td>
        <td>
            <a href="">Edit</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>"
            onclick="return confirm('Yakin?');">Delete</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50px" height="50px"></td>
        <td><?php echo $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]?></td>
        <td><?php echo $row["jurusan"];?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach;?>
</table>
    
</body>
</html>