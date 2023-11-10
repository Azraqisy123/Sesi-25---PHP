<?php 
include "../connection.php";

$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM buku WHERE isbn = '$id'");
header("Location: ../buku.php");
?>