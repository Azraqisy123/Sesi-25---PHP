<?php
//Nomor 1
echo "[Soal Nomor 1] <br>";
$array = array ("satu", "dua", "tiga", "empat", "lima");
for ($x = count ($array) -1 ; $x >= 0 ; $x --) {
    echo $array[$x] . "<br>";
}
echo "<br>";
?>

<?php
//Nomor 2
echo "[Soal Nomor 2] <br>";
$array_buah = array ("apel", "nanas", "mangga", "jeruk");
echo "Terdapat " . count($array_buah) . " buah";
echo "<br>";
?>

<?php
//Nomor 3
echo "<br>";
echo "[Soal Nomor 3] <br>";
$array_angka = array (7, 3, 4, 9);
$hasil = array_sum ($array_angka);
echo "Totalnya adalah " . $hasil ;
echo "<br>"
?>

<?php
//Nomor 4
echo "<br>";
echo "[Soal Nomor 4] <br>";
for ($i=1; $i <= 10 ; $i++) { 
    for ($a=1; $a <= 1 ; $a++) { 
        $hasil = $i * $a;
        echo $a . " x " . $i . " = " . $hasil . "<br>";
    }
}
echo "<br>"
?>

