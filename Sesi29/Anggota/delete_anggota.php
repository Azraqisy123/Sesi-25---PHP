<?php 
include "../connection.php";

$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM anggota WHERE id_anggota = '$id'");
header("Location: ../index.php");
?>