<?php
   // koneksi ke database
$conn= mysqli_connect ("localhost","root","","phpdasar");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;
    
      $nama = $data["nama"];
      $jenisbinatang = $data["jenisbinatang"];
      $namalatin = $data["namalatin"];
      $query="INSERT INTO binatang
      VALUES
   ('','$nama', ' $jenisbinatang', '$namalatin')
    ";

   mysqli_query($conn,$query);

   return mysqli_affected_rows($conn);


}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM binatang WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data){
    global $conn;

    $id=$data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $jenisbinatang =htmlspecialchars($data["jenisbinatang"]);
    $namalatin =htmlspecialchars($data["namalatin"]);
       $query="UPDATE binatang SET
            nama = '$nama',
            jenisbinatang = '$jenisbinatang',
            namalatin = '$namalatin'
        WHERE id = $id
            ";


    mysqli_query($conn,$query);
 
    return mysqli_affected_rows($conn);
 }

?>
