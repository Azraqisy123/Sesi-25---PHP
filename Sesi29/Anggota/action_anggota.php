<?php

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['sex'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$path = "../connection.php";

include "$path";

mysqli_query($connection, 
"INSERT INTO `anggota` (`nama`, `sex`, `telp`, `alamat`) 
VALUES ('$nama', '$jenis_kelamin', '$telp', '$alamat'); ");

?>
