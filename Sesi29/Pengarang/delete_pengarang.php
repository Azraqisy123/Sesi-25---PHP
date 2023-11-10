<?php 
include "../connection.php";

$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM pengarang WHERE id_pengarang = '$id'");
header("Location: ../pengarang.php");
?>