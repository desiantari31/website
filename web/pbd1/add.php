<?php
require'function.php';
// koneksi ke DBMS
$conn = mysqli_connect("localhost","root","","phpdasar");

    // mengecek tombol apakah user telah mensubmit
if( isset($_POST["submit"]) ) {
   

   // mengecek data yg telah ditambahkan
   if(tambah ($_POST) > 0 ){
      echo"
         <script>
            alert('data berhasil ditambahkan!');
            document.location.href='index.php';
         </script>
         ";
   }else {
      echo"
      <script>
            alert('data gagal ditambahkan!');
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
    <title> Tambah data binatang </title>
</head>
<body>
    <h1>Tambahkan data binatang</h1>

    <form action="" method="post">
        <ul>
          <li>
            <label for="nama">nama :</label>
            <input type="text"name="nama"id="nama"required>
         </li><br>
         <li>
            <label for="jenisbinatang">jenis binatang :</label>
            <input type="text"name="jenisbinatang"id="jenisbinatang">
         </li><br>
         <li> 
         <label for="namalatin">nama latin :</label>
            <input type="text"name="namalatin"id="namalatin">
         </li><br>
         <li> 
            <button type="submit"name="submit">Tambah Data</button>
         </li>
        </ul>

    </form>

</body>
</html>