<?php 
include "connection.php";
$query = mysqli_query ($connection, "SELECT * FROM anggota");
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
                <a class="navbar-brand disabled text-light fw-bold">DATABASE - ANGGOTA</a>
                <ul class="nav nav-pills justify-content-end nav-pills">
                <li class="nav-item">
                    <a class="nav-link link-light active" aria-current="page" href="index.php">ANGGOTA</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link link-light" href="penerbit.php">PENERBIT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-light" href="pengarang.php">PENGARANG</a>
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
                <th scope = "col">Nama</th>
                <th scope = "col">Username</th>
                <th scope = "col">Password</th>
                <th scope = "col">Jenis Kelamin</th>
                <th scope = "col">Telepon</th>
                <th scope = "col">Alamat</th>
                <th scope = "col"></th>
            </tr>
            <?php 
                while ($data = mysqli_fetch_array($query)){ ?>
            <tr class = "table-light">
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["username"]; ?></td>
                <td><?php echo $data["password"]; ?></td>
                <td><?php echo $data["sex"]; ?></td>
                <td><?php echo $data["telp"]; ?></td>
                <td><?php echo $data["alamat"]; ?></td>
                <td>
                    <a href="Anggota/edit_anggota.php?id=<?php echo $data['id_anggota']; ?>" class = "btn btn-warning btn-sm">Edit</a>
                    <a href="Anggota/delete_anggota.php?id=<?php echo $data['id_anggota']; ?>" class = "btn btn-danger btn-sm" onclick = "return confirm('Hapus Item?');">Delete</a>
            </tr>

        <?php } ?>
        </table>
        <a class="btn btn-primary" href="Anggota/add_data_anggota.php" role="button">Tambah Data</a>
    </div>
</body>
</html>