<?php 

$id = $_GET['id'];

$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$qty_stok = $_POST['qty_stok'];
$harga_pinjam = $_POST['harga_pinjam'];

include "../connection.php";

mysqli_query($connection, "UPDATE buku SET judul = '$judul', tahun = '$tahun', qty_stok = '$qty_stok', harga_pinjam = '$harga_pinjam' WHERE isbn = '$id'");

header("Location: ../buku.php");

?>