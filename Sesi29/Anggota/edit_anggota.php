<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Anggota</title>
</head>

<?php
include "../connection.php";

$id = $_GET['id'];
$anggota = mysqli_query($connection, "SELECT * FROM anggota WHERE id_anggota= '$id'");

while ($anggota_data = mysqli_fetch_array($anggota)) {
    $nama = $anggota_data['nama'];
    $telpon = $anggota_data['telp'];
    $alamat = $anggota_data['alamat'];
}
?>

<body>
    <div class = "bg-dark m-3">
        <nav class="navbar bg-body-tertiary"> 
            <div class = "container-fluid">
            <a class="navbar-brand disabled text-light fw-bold">Edit Data Anggota</a>
            </div>
        </nav>
    </div>
    <div class = "m-3">
        <div class = "row">
            <div class = "col-md-6">
                <form action = "action_edit.php?id=<?php echo $id;?>" method = "post">
                    <table class = "table">
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name = "nama" class = "form-control" value = "<?php echo $nama; ?>"></td>
                            
                        </tr>
                        <tr>
                            <td>No.Telepon</td>
                            <td><input type="number" name = "telp" class = "form-control" value = "<?php echo $telpon; ?>"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><textarea class="form-control" name = "alamat" rows="5"><?php echo $alamat; ?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                </table>
                <a class="btn btn btn-outline-primary" href="http://www.localhost/Tugas_PHP/Sesi29/index.php" role="button">Kembali</a>
                <input type="submit" name = "Submit" class = "btn btn-primary fw-bold" value = "Submit">
            </form> 
        </div>
    </div>
</body>
</html>