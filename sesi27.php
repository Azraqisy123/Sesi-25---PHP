<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "Soal Nomor 1 <br>";
    for ($i=0; $i <=9 ; $i++) {
        for ($a=0; $a <$i ; $a++) { 
            echo "$a";
        } 
        echo "<br>";
        
    }
    echo "<br>";
    echo "Soal Nomor 2";
?>
    <table border = "1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
        </tr>
        <?php
            $angka = 10;
            for ($i=1; $i <=10 ; $i++) { 
        ?>
            <tr>
                <td>No <?php echo "$i" ?></td>
                <td>Name ke <?php echo "$i" ?></td>
                <td>Kelas <?php echo "$angka"; $angka--;?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>