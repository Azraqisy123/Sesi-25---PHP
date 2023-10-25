<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
</head>
<body>
    <div style = "padding: 10px; background-color : #FF8C00; font-size: 26px; margin-bottom : 6px;">Daftar Nilai</div>
    <table border = "1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Tanggal Lahir</td>
            <td>Umur</td>
            <td>Alamat</td>
            <td>Kelas</td>
            <td>Nilai</td>
            <td>Hasil</td>
        </tr>
        <?php
            $data = file_get_contents("data.json");
            $students = json_decode($data);

            foreach ($students as $key => $student) {
            
            //menghitung umur
            $tanggal_lahir_ = new DateTime ($student->tanggal_lahir);
            $tahun_sekarang = new DateTime();
            $umur = $tahun_sekarang->diff($tanggal_lahir_);

            //menghitung hasil
            $nilai_hasil = $student->nilai;
            if ($nilai_hasil >= 90 and $nilai_hasil <= 100) {
                $hasil = "A";
            }
            elseif ($nilai_hasil >= 80 and $nilai_hasil <= 90) {
                $hasil = "B";
            }
            elseif ($nilai_hasil >= 70 and $nilai_hasil <= 80) {
                $hasil = "C";
            }
            else {
                $hasil = "D";
            }

            //warna baris 
            if ($key % 2 == 0) {
                $color = "white";
            }
            else {
                $color = "#D3D3D3";
            }
        ?>
            <tr style = "background-color: <?php echo $color ?>;">
                <td><?php echo $key + 1 . "." ?> </td>
                <td><?php echo $student->nama ?></td>
                <td><?php echo $student->tanggal_lahir ?></td>
                <td><?php echo $umur->y ?> </td>
                <td><?php echo $student->alamat ?> </td>
                <td><?php echo $student->kelas ?></td>
                <td><?php echo $student->nilai ?></td>
                <td><?php echo $hasil ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>