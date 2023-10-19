<?php
    echo "Soal Nomor 1 <br>";
    for ($i=1; $i <= 10 ; $i++) { 
        if ($i % 2 == 0) {
            echo "angka $i merupakan bilangan genap <br>";
        }
        else {
            echo "angka $i merupakan bilangan ganjil <br>";
        } 
    }
    echo "<br>";

    echo "Soal Nomor 2 <br>";
    for ($a=2000; $a <=2023 ; $a++) { 
        if ($a % 4 == 0) {
            echo "Tahun $a adalah tahun kabisat <br>";
        }
        else {
            echo "Tahun $a bukan tahun kabisat <br>";
        } 
    }
    echo "<br>";

    echo "Soal Nomor 3 <br>";
    for ($i=10; $i >=1 ; $i--) {
        for ($a=1; $a <$i ; $a++) { 
            echo "$a";
        } 
        echo "<br>";
        
    }
?>