<!-- Istilah-istilah baru
pow($r, 2) artinya r pangkat 2
pi() = 3.14
. digunakan untuk menyambungkan string 
-->

<?php
// Luas persegi
function luas_square($sisi) {
    return pow($sisi, 2);
}

// Luas persegi panjang
function luas_rectangle($panjang, $lebar) {
    return $panjang * $lebar;
}

// Luas lingkaran dengan phi
function luas_circle1($r) {
    return pi() * pow($r, 2);
}

// Luas lingkaran 22/7
function luas_circle2($r) {
    return (22/7) * pow($r, 2);
}

// Luas segitiga
function luas_triangle($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Luas Trapesium
function luas_trapesium($a, $b, $tinggi) {
    return 0.5 * ($a + $b) * $tinggi;
}

// Input nilai
echo "1. Luas persegi dengan panjang sisi 3 adalah: ";
echo luas_square(3);
echo "<br>";

echo "2. Luas persegi panjang dengan panjang 6 dan lebar 4 adalah: " . luas_rectangle(6, 4) . "<br>";
echo "3. Luas lingkaran dengan jari-jari 7 dan phi 3,14 adalah : " . luas_circle1(7) . "<br>";
echo "3. Luas lingkaran dengan jari-jari 7 dan phi 22/7 adalah : " . luas_circle2(7) . "<br>";
echo "4. Luas segitiga dengan alas 3 dan tinggi 4 adalah : " . luas_triangle(3, 4) . "<br>";
echo "5. Luas trapesium dengan alas(a) 3, alas(b) 4, dan tinggi 6 adalah: " . luas_trapesium(3, 4, 6) . "<br>";
?>


