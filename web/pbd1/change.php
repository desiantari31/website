<?php
require'function.php';

// ambil data di URL
$id = $_GET["id"];
// query data binatang berdasarkan id
$binatang = query("SELECT * FROM binatang WHERE id = $id")[0];

    // mengecek tombol submit apakah sudah ditekan 
if( isset($_POST["submit"]) ) {
   

   // mengecek apakah data berhasil diubah
   if(ubah($_POST) > 0 ){
      echo"
         <script>
            alert('data berhasil diubah!');
            document.location.href='index.php';
         </script>
         ";
   }else {
      echo"
      <script>
            alert('data gagal diubah!');
            document.location.href='index.php';
         </script>
         ";
   }
   
}
?>

<!DOCTYPE html>
<html lang="en">
<body bgcolor="blue">
<html>
<head>
    <title>Tambah data binatang</title>
</head>
<body>
    <h1>Edit data binatang</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $binatang["id"];?>">
          <li>
            <label for="nama">Nama :</label>
            <input type="text"name="nama"id="nama"required value="<?= $binatang["nama"];?>">
         </li><br>
         <li>
            <label for="jenisbinatang">jenis binatang :</label>
            <input type="text"name="jenisbinatang"id="jenisbinatang"required value="<?= $binatang["jenisbinatang"];?>">
         </li><br>
         <li>
         <label for="namalatin">namalatin :</label>
            <input type="text"name="namalatin"id="namalatin"required value="<?= $binatang["namalatin"];?>">
         </li><br>
         </li>
         <li>
            <button type="submit"name="submit">Ubah Data</button>
         </li>
         


    </form>

</body>
</html>