<?php
// Luas persegi
function area_square($side) {
    return $side * $side;
}

// Luas persegi panjang
function area_rectangle($length, $width) {
    return $length * $width;
}

// Luas lingkaran
function area_circle($radius) {
    return pi() * pow($radius, 2);
}

// Luas segitiga
function area_triangle($base, $height) {
    return 0.5 * $base * $height;
}

// Luas Trapesium
function area_trapesium($base1, $base2, $height) {
    return 0.5 * ($base1 + $base2) * $height;
}

// Sample usage
echo "Luas persegi dengan panjang sisi 5 adalah: " . area_square(5) . "<br>";
echo "Luas persegi panjang dengan panjang 8 dan lebar 4 adalah: " . area_rectangle(8, 4) . "<br>";
echo "Luas lingkaran dengan jari-jari 3 adalah : " . area_circle(3) . "<br>";
echo "Luas segitiga dengan alas 6 dan tinggi 2 adalah : " . area_triangle(6, 2) . "<br>";
echo "Luas trapesium dengan alas 3, alas 2 5, dan tinggi 4 adalah: " . area_trapesium(3, 5, 4) . "<br>";
?>
