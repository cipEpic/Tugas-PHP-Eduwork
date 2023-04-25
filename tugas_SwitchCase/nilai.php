<?php
// input nilai
$nilai = 85;

// hitung kategori
switch(true) {
    case ($nilai >= 90 && $nilai <= 100):
        $kategori = "A";
        break;
    case ($nilai >= 80 && $nilai < 90):
        $kategori = "B";
        break;
    case ($nilai >= 70 && $nilai < 80):
        $kategori = "C";
        break;
    default:
        $kategori = "D";
}

// tampilkan hasil
echo "Nilai Anda adalah " . $nilai . ", kategori nilai Anda adalah " . $kategori;
?>
