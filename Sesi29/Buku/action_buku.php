<?php

$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$stok = $_POST['qty_stok'];
$harga = $_POST['harga_pinjam'];

$path = "../connection.php";

include "$path";

mysqli_query($connection, 
"INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `qty_stok`, `harga_pinjam`) 
VALUES ('$isbn', '$judul', '$tahun', '$stok', '$harga'); ");

?>
