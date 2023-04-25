<?php
// Volume kubus
function volume_cube($side) {
    return pow($side, 3);
}

// Volume balok
function volume_beam($width, $height, $length) {
    return $width * $height * $length;
}

// Volume tabung
function volume_cylinder($radius, $height) {
    return pi() * pow($radius, 2) * $height;
}

// Sample usage
echo "Volume kubus dengan panjang sisi 5 adalah: " . volume_cube(5) . "<br>";
echo "Volume balok dengan lebar 5, tinggi 3, dan panjang 10 adalah:" . volume_beam(5, 3, 10) . "<br>";
echo "Volume tabung dengan jari-jari 2 dan tinggi 4 adalah: " . volume_cylinder(2, 4) . "<br>";
?>