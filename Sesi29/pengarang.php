<?php 
include "connection.php";
$query = mysqli_query ($connection, "SELECT * FROM pengarang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas - Sesi 29</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="bg-dark m-2">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand disabled text-light fw-bold">DATABASE - PENGARANG</a>
                <ul class="nav nav-pills justify-content-end nav-pills">
                <li class="nav-item">
                    <a class="nav-link link-light" href="index.php">ANGGOTA</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link link-light" href="penerbit.php">PENERBIT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-light active" href="pengarang.php">PENGARANG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-light" href="buku.php">BUKU</a>
                </li>
            </ul>
            </div>
        </nav>
    </div>
    <div class = "container">
        <table class = "table table-dark table-striped mx-auto">
            <tr>
                <th scope = "col">Nama Pengarang</th>
                <th scope = "col">Email</th>
                <th scope = "col">Telepon</th>
                <th scope = "col">Alamat</th>
                <th scope = "col"></th>
            </tr>
            
            <?php 
                while ($data = mysqli_fetch_array($query)){ ?>

            <tr class = "table-light">
                <td><?php echo $data["nama_pengarang"]; ?></td>
                <td><?php echo $data["email"]; ?></td>
                <td><?php echo $data["telp"]; ?></td>
                <td><?php echo $data["alamat"]; ?></td>
                <td>
                    <a href="Pengarang/edit_pengarang.php?id=<?php echo $data['id_pengarang']; ?>" class = "btn btn-warning btn-sm">Edit</a>
                    <a href="Pengarang/delete_pengarang.php?id=<?php echo $data['id_pengarang']; ?>" class = "btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

        <?php } ?>
        </table>
        <a class="btn btn-primary" href="Pengarang/add_data_pengarang.php" role="button">Tambah Data</a>
    </div>
</body>
</html>