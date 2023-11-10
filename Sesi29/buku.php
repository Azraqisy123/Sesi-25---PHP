<?php 
include "connection.php";
$query = mysqli_query ($connection, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas - Sesi 29</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style = "background-color : #F0F3F4">
    <div class="bg-dark m-2">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand disabled text-light fw-bold">DATABASE - BUKU</a>
                <ul class="nav nav-pills justify-content-end nav-pills">
                <li class="nav-item">
                    <a class="nav-link link-light" href="index.php">ANGGOTA</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link link-light" href="penerbit.php">PENERBIT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-light " href="pengarang.php">PENGARANG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-light active" href="buku.php">BUKU</a>
                </li>
            </ul>
            </div>
        </nav>
    </div>
    <div class = "container p-4">
        <table id="myTable" class = "display">
                <thead>
                    <tr>
                        <th scope = "col">ISBN</th>
                        <th scope = "col">Judul Buku</th>
                        <th scope = "col">Tahun</th>
                        <th scope = "col">Stok</th>
                        <th scope = "col">Harga Peminjaman</th>
                        <th scope = "col"></th>

                    </tr>
                </thead>
            <?php 
                while ($data = mysqli_fetch_array($query)){ ?>
                <tbody>
                    <tr>
                        <td><?php echo $data["isbn"]; ?></td>
                        <td><?php echo $data["judul"]; ?></td>
                        <td><?php echo $data["tahun"]; ?></td>
                        <td><?php echo $data["qty_stok"]; ?></td>
                        <td><?php echo "Rp" . number_format($data["harga_pinjam"])  ?></td>
                        <td>
                            <a href="Buku/edit_buku.php?id=<?php echo $data['isbn']; ?>" class = "btn btn-warning btn-sm">Edit</a>
                            <a href="Buku/delete_buku.php?id=<?php echo $data['isbn']; ?>" class = "btn btn-danger btn-sm" onclick = "return confirm('Hapus Item?');">Delete</a>
                        </td>
                    </tr>
                </tbody>
        <?php } ?>
        </table>
        <a class="btn btn-primary" href="Buku/add_data_buku.php" role="button">Tambah Data</a>  
    </div>
</body>
</html>

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>