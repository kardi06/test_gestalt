<?php
/* 
Bahasa Pemrograman: PHP
Waktu pengerjaan: 10 menit
*/

$string = "Coding merupakan kegiatan yang dimana kamu memberitahukan komputer apa yang harus dia kerjakan untuk kamu. Sebuah kode yang ada pada skrip bisa diibaratkan layaknya bahasa sehari-hari. Setiap kode yang kamu tulis akan membantu komputer untuk mengetahui dan memahami apa yang ingin kamu lakukan pada komputer.";

// Menghitung jumlah huruf
$totalHuruf = strlen(str_replace(' ', '', $string));
echo "Jumlah huruf: " . $totalHuruf . PHP_EOL;

// Menghitung jumlah kata
$totalKata = str_word_count($string);
echo "Jumlah kata: " . $totalKata . PHP_EOL;

// Menghitung jumlah huruf vokal
$vokalCount = preg_match_all('/[aeiouAEIOU]/', $string);
echo "Jumlah huruf vokal: " . $vokalCount . PHP_EOL;

// Menghitung jumlah huruf konsonan
$konsonanCount = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $string);
echo "Jumlah huruf konsonan: " . $konsonanCount . PHP_EOL;

// Mencari kata terbanyak
$words = str_word_count(strtolower($string), 1);
$wordFrequency = array_count_values($words);
arsort($wordFrequency);
$mostFrequentWord = array_key_first($wordFrequency);
echo "Kata terbanyak: " . $mostFrequentWord . " (muncul " . $wordFrequency[$mostFrequentWord] . " kali)" . PHP_EOL;
?>
