<?php

$nama = $_POST['nama_pengarang'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$path = "../connection.php";

include "$path";

mysqli_query($connection, 
"INSERT INTO `pengarang` (`nama_pengarang`, `email`, `telp`, `alamat`) 
VALUES ('$nama', '$email', '$telp', '$alamat'); ");

?>
