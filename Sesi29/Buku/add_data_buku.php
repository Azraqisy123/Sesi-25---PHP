<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Anggota</title>
</head>
<body>
    <div class = "bg-dark m-3">
        <nav class="navbar bg-body-tertiary"> 
            <div class = "container-fluid">
            <a class="navbar-brand disabled text-light fw-bold">Tambah Data Pengarang</a>
            </div>
        </nav>
    </div>
    <div class = "m-3">
        <div class = "row">
            <div class = "col-md-6">
                <form action = "action_buku.php" method = "post">
                    <table class = "table">
                        <tr>
                            <td>ISBN</td>
                            <td><input type="text" name = "isbn" class = "form-control"></td>
                        </tr>
                        <tr>
                            <td>Judul Buku</td>
                            <td><input type="text" name = "judul" class = "form-control"></td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td><input type="number" name = "tahun" class = "form-control"></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><input type="number" name = "qty_stok" class = "form-control"></td>
                        </tr>
                        <tr>
                            <td>Harga Peminjaman</td>
                            <td><input type="number" name = "harga_pinjam" class = "form-control" min="0.00" step="0.01"></td>
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