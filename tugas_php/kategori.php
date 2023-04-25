<?php
//mengambil nilai dari query string
$nama = 'Evi';
$tinggi = 165;
$berat = 46;

//menghitung BMI
$bmi = $berat / (($tinggi/100) * ($tinggi/100));

//menampilkan hasil
echo "Halo, " . $nama . ". Nilai BMI anda adalah " . number_format($bmi,2) . ", anda termasuk ";

if ($bmi < 18.5) {
    echo "kurus.";
} elseif ($bmi >= 18.5 && $bmi < 25) {
    echo "normal.";
} else{
    echo "gemuk.";
}

?>