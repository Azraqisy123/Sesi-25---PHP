<?php 
include "../connection.php";

$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM penerbit WHERE id_penerbit = '$id'");
header("Location: ../penerbit.php");
?>