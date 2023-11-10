<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Buku</title>
</head>

<?php
include "../connection.php";

$id = $_GET['id'];
$buku = mysqli_query($connection, "SELECT * FROM buku WHERE isbn= '$id'");

while ($buku_data = mysqli_fetch_array($buku)) {
    $isbn = $buku_data['isbn'];
    $judul = $buku_data['judul'];
    $tahun = $buku_data['tahun'];
    $qty_stok = $buku_data['qty_stok'];
    $harga_pinjam = $buku_data['harga_pinjam'];
}
?>

<body>
    <div class = "bg-dark m-3">
        <nav class="navbar bg-body-tertiary"> 
            <div class = "container-fluid">
            <a class="navbar-brand disabled text-light fw-bold">Edit Data Buku</a>
            </div>
        </nav>
    </div>
    <div class = "m-3">
        <div class = "row">
            <div class = "col-md-6">
                <form action = "action_edit_buku.php?id=<?php echo $id;?>" method = "post">
                    <table class = "table">
                        <tr>
                            <td>ISBN</td>
                            <td><input type="text" name = "isbn" class = "form-control" value = "<?php echo $isbn; ?>"></td>
                        </tr>
                        <tr>
                            <td>Judul Buku</td>
                            <td><input type="text" name = "judul" class = "form-control" value = "<?php echo $judul; ?>"></td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td><input type="number" name = "tahun" class = "form-control" value = "<?php echo $tahun; ?>"></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><input type="number" name = "qty_stok" class = "form-control" value = "<?php echo $qty_stok; ?>"></td>
                        </tr>
                        <tr>
                            <td>Harga Peminjaman</td>
                            <td><input type="number" name = "harga_pinjam" class = "form-control" min="0.00" step="0.01" value = "<?php echo $harga_pinjam; ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                </table>
                <a class="btn btn btn-outline-primary" href="http://www.localhost/Tugas_PHP/Sesi29/buku.php" role="button">Kembali</a>
                <input type="submit" name = "Submit" class = "btn btn-primary fw-bold" value = "Submit">
            </form> 
        </div>
    </div>
</body>
</html>