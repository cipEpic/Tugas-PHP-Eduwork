<?php
// Volume kubus
function volume_kubus($s) {
    return pow($s, 3);
}

// Volume balok
function volume_balok($lebar, $tinggi, $panjang) {
    return $lebar * $tinggi * $panjang;
}

// Volume tabung
function volume_tabung($r, $t) {
    return (22/7) * pow($r, 2) * $t;
}

// Sample usage
echo "1. Volume kubus dengan panjang sisi 5 adalah: " . volume_kubus(5) . "<br>";
echo "2. Volume balok dengan lebar 6, tinggi 4, dan panjang 10 adalah: " . volume_balok(6, 4, 10) . "<br>";
echo "3. Volume tabung dengan jari-jari 7 dan tinggi 4 adalah: " . volume_tabung(7, 4) . "<br>";
?>