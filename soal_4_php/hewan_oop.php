<?php
/* 
Bahasa Pemrograman: PHP
Waktu pengerjaan: 5 menit
*/

class Hewan {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function bersuara() {
        return "Aku adalah hewan";
    }
}

class Kucing extends Hewan {
    public function bersuara() {
        return "Meow";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        return "Woof";
    }
}

// Instansiasi objek
$kucing = new Kucing("Kucing");
$anjing = new Anjing("Anjing");

// Output
echo $kucing->nama . " bersuara \"" . $kucing->bersuara() . "\"" . PHP_EOL;
echo $anjing->nama . " bersuara \"" . $anjing->bersuara() . "\"" . PHP_EOL;
?>
