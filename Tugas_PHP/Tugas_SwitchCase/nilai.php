<?php 
$nilai = 75;

$hasil = "";
switch (true) {
    case ($nilai >=90) :
        $hasil = "A";
        break;

    case ($nilai >=80 && $nilai < 90) :
        $hasil = "B";
        break;
    
    case ($nilai >=70 && $nilai < 80) :
        $hasil = "C";
        break;

    case ($nilai >=0 && $nilai <70) :
        $hasil = "D";
        break;
}

echo "Nilai Tugas : " . $nilai . "<br>";
echo "Hasil : " . $hasil ;
?>