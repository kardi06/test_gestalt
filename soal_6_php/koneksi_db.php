<?php
// koneksi database

$host = 'localhost';
$dbname = 'rental_buku';
$user = 'root'; // ganti sesuai dengan username database Anda
$pass = ''; // ganti sesuai dengan password database Anda

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
?>
