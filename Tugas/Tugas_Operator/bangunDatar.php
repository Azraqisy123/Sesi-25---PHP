<?php
//menghitung bangun datar persegi 
echo "BANGUN DATAR PERSEGI <br>";
$panjang_sisi = 10;
$luas = $panjang_sisi * $panjang_sisi;

echo "Panjang Sisi Persegi : " . $panjang_sisi . "<br>";
echo "Rumus : Panjang Sisi * Panjang Sisi <br>";
echo "Luas Persegi : ". $luas . "<br>";
echo "=============== <br>";

//menghitung bangun datar persegi panjang
echo "BANGUN DATAR PERSEGI PANJANG <br>";
$panjang = 8;
$lebar = 5;
$luas_ = $panjang * $lebar;

echo "Panjang Persegi Panjang : " . $panjang . "<br>";
echo "Lebar Persegi Panjang : " . $lebar . "<br>";
echo "Rumus : panjang * lebar <br>";
echo "Luas Persegi Panjang : ". $luas_ . "<br>";
echo "=============== <br>";

//menghitung bangun datar segitiga 
echo "BANGUN DATAR SEGITIGA <br>";
$alas = 10;
$tinggi = 6;
$luas_s = 0.5 * $alas * $tinggi;

echo "Alas Segitiga : " . $alas . "<br>";
echo "Tinggi Segitiga : " . $tinggi . "<br>";
echo "Rumus : 0.5 * alas * tinggi <br>"; 
echo "Luas Segitiga : ". $luas_s . "<br>";
echo "=============== <br>";

//menghitung bangun datar lingakaran
echo "BANGUN DATAR LINGKARAN <br>";
$radius = 4;
$luas_l = M_PI * pow ($radius, 2);

echo "Radius Lingkaran : " . $radius . "<br>";
echo "Rumus : phi * r * r <br>";
echo "Luas Lingakran : ". $luas_l . "<br>";
echo "=============== <br>";

//menghitung bangun datar trapesium
echo "BANGUN DATAR TRAPESIUM <br>";
$alas1 = 6;
$alas2 = 7;
$tinggi_t = 6;
$luas_t = 0.5 * ($alas1*$alas2) * $tinggi_t;

echo "Alas_T 1 : " . $alas1 . "<br>";
echo "Alas_T 2 : " . $alas2 . "<br>";
echo "Tinggi  : " . $tinggi_t . "<br>";
echo "Rumus : 1/2 * (a*b) * tinggi <br>";
echo "Luas Trapesium : ". $luas_t . "<br>";
?>