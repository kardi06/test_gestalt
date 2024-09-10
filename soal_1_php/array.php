<?php
/* 
Bahasa Pemrograman: PHP
Waktu pengerjaan: 9 menit
*/

// Membuat array
$cars = array("Volvo", "BMW", "Toyota", "Kijang");

// Jumlah elemen dalam array
$count = count($cars);

// Perulangan
for ($i = 0; $i < $count; $i++) {
    $shifted = array();

    // Memutar array berdasarkan index $i
    for ($j = 0; $j < $count; $j++) {
        $shifted[] = $cars[($i + $j) % $count];
    }

    // Menampilkan hasil 
    echo chr(97 + $i) . ". " . implode(",", $shifted) . PHP_EOL;
}
?>