<?php
require 'function.php';
$binatang=query("SELECT * FROM binatang");

?>
<!DOCTYPE html>
<html lang="en">
<body bgcolor="blue">
<html>
<head>
    <title> Halaman Admin </title>
</head>
<body>

    <h1>Daftar Nama Binatang</h1>

    <button type ="button"class="btn btn-success btn-sm"><a href="add.php">Tambah data binatang</a></button>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>Jenis Binatang</th>
        <th>Nama Latin</th>
    <tr>

    <?php $i = 1; ?>
    <?php foreach($binatang as $row) :?>

    <tr>
        <td> <?= $i; ?> </td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["jenisbinatang"]; ?></td>
        <td><?= $row["namalatin"]; ?></td>
        <td>
            <button type ="button"class="btn btn-success btn-sm"><a href="change.php?id=<?= $row["id"]; ?>"> Edit </a></button>
            <button type ="button"class="btn btn-success btn-sm"><a href="delet.php?id=<?= $row["id"]; ?>" onclick="
            return confirm('Yakinkah Anda Ingin Menghapus Data Ini?')">Hapus </a></button>
        </td>
    </tr>
    <?php $i++; ?>
<?php endforeach ; ?>

    </table>

</body>
</html>