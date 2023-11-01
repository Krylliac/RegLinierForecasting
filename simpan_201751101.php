<?php

include "konek_201751101.php";
{
// ...some PHP code for database "my_db"...
$tahun = $_POST['tahun'];
$jumlah = $_POST['jumlah'];

mysqli_query($con,"INSERT INTO pmb_201751101 (periode_pmb,jumlah_pmb) 
VALUES ('$tahun','$jumlah')");
echo "<script>alert ('data berhasil disimpan')</script>";
}

?>