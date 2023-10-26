<?php 
//menghitung volume kubus 
echo "MENGHITUNG VOLUME BANGUN RUANG KUBUS <br>";

$sisi = 5;
$volume = pow($sisi, 3);

echo "Sisi : " . $sisi . "<br>";
echo "Rumus : Sisi * Sisi * Sisi <br>";
echo "Volume Kubus : $sisi * $sisi * $sisi <br>";
echo "hasil : " . $volume . "<br>" ; 
echo "======================== <br>";
?>

<?php 
//menghitung volume balok 
echo "MENGHITUNG VOLUME BANGUN RUANG BALOK <br>";

$panjang = 15;
$lebar = 13;
$tinggi = 25;
$volume = $panjang * $lebar * $tinggi;

echo "Panjang : " . $panjang . "<br>";
echo "Lebar : " . $lebar . "<br>";
echo "Tinggi : " . $tinggi . "<br>";

echo "Rumus : Panjang * Lebar * Tinggi <br>";
echo "Volume Balok : $panjang * $lebar * $tinggi <br>";
echo "hasil : " . $volume . "<br>" ; 
echo "======================== <br>";
?>

<?php 
//menghitung volume tabung
echo "MENGHITUNG VOLUME BANGUN RUANG TABUNG <br>";

$jari_jari = 4;
$tinggi = 6;
$volume = M_PI * pow ($jari_jari, 2) * $tinggi;

echo "Jari - Jari : " . $jari_jari . "<br>";
echo "Tinggi : " . $tinggi . "<br>";

echo "Rumus : Phi * r2 * tinggi <br>";
echo "Volume Tabung : 22/7 * $jari_jari * $jari_jari * $tinggi <br>";
echo "hasil : " . $volume . "<br>" ; 
echo "======================== <br>";
?>