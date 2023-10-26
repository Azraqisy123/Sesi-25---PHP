<?php 
// Menghitung Kategori BMI 

$nama = "Azraqi Syahriza";
$berat_badan = 45;
$tinggi_badan = 1.60;

//Hitung BMI 
$BMI = $berat_badan / ($tinggi_badan * $berat_badan);

//Kategori BMI 
if ($BMI < 18.5) {
    $kategori = "kekurangan Berat Badan (Underweight)";
}
elseif ($BMI >= 18.5 && $BMI < 24.9) {
    $kategori = "Berat Badan Normal";
}
elseif ($BMI >= 25 && $BMI < 29.9) {
    $kategori = "Berat Badan Berlebih (Overweight)";
}
else {
    $kategori = "Obesitas";
}

//Hasil BMI
echo "Nama : $nama <br>";
echo "Berat Badan Anda : $berat_badan <br>";
echo "Tinggi Badan Anda : $tinggi_badan <br>";
echo "========================<br>";

echo "Hallo, $nama <br>";
echo "Nilai BMI anda adalah $BMI, anda termasuk $kategori";

?>
