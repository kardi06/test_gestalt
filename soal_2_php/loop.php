<?php
/* 
Bahasa Pemrograman: PHP
Waktu pengerjaan: 5 menit
*/

for ($i = 1; $i <= 10; $i++) {
    if($i <= 5){
        $formatted = str_pad($i, $i, "0", STR_PAD_LEFT);
    }else{
        $formatted = str_pad($i, $i, "0", STR_PAD_RIGHT);
    }
    echo $formatted . PHP_EOL;
}
?>