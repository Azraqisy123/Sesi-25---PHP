<?php 
    //Nomor 1 
    echo "SOAL NOMOR 1 <br>";
    echo "========================<br>";
    for ($i=1; $i <= 10 ; $i++) { 
        for ($a=1; $a <= 1 ; $a++) { 
            $hasil = $i * $a;
            echo $i . " x " . $a . " = " . $hasil . "<br>";
        }
    }
    echo "<br>";
?>

<?php
    //Nomor 2
    echo "SOAL NOMOR 2 <br>";
    echo "========================<br>";
    for ($i=10; $i >=1 ; $i--) {
        for ($a=1; $a <$i ; $a++) { 
            echo "*";
        }
        echo "<br>";      
    }
?>

<?php
    //Nomor 3
    echo "SOAL NOMOR 3 <br>";
    echo "========================";
    for ($i=0; $i <=9 ; $i++) {
        for ($a=0; $a <$i ; $a++) { 
            echo "$a";
        } 
        echo "<br>";
    
    }
?>