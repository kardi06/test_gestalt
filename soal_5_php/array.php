<?php
$data = [[9, 5, 2], [1, 3, 8], [10, 15, 12], [4, 7, 6], [13, 11, 14]];

// Mengurutkan array berdasarkan nilai elemen
foreach ($data as &$subArray) {
    sort($subArray);
}
unset($subArray);

echo "Array terurut: ";
print_r($data);

// Menghitung jumlah elemen ganjil
$oddCount = 0;
foreach ($data as $subArray) {
    foreach ($subArray as $value) {
        if ($value % 2 != 0) {
            $oddCount++;
        }
    }
}
echo "Jumlah elemen ganjil: " . $oddCount . PHP_EOL;

// Mencari elemen terbesar
$maxValue = max(array_map('max', $data));
echo "Elemen terbesar: " . $maxValue . PHP_EOL;
?>
