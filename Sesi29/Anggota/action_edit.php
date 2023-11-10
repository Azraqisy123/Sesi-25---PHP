<?php 

$id = $_GET['id'];

$nama = $_POST['nama'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

include "../connection.php";

mysqli_query($connection, "UPDATE anggota SET nama = '$nama', telp = '$telp', alamat = '$alamat' WHERE id_anggota = '$id'");

header("Location: ../index.php");

?>