<?php

$nama = $_POST['nama_penerbit'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$path = "../connection.php";

include "$path";

mysqli_query($connection, 
"INSERT INTO `penerbit` (`nama_penerbit`, `email`, `telp`, `alamat`) 
VALUES ('$nama', '$email', '$telp', '$alamat'); ");

?>
