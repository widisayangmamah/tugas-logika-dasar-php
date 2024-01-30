<?php

$totalPembelian = 130000;
$diskonHariSelasa = 0.05;
$diskonPembelianDiAtas100K = 0.07;
$batasDiskonPembelianDiAtas100K = 100000;

$hariIni = 'selasa';

// Inisialisasi diskon awal
$diskon = 0;

// Menambahkan diskon hari Selasa
if ($hariIni == 'selasa') { // Hari Selasa
    $diskon += $totalPembelian * $diskonHariSelasa;
}

if ($totalPembelian > $batasDiskonPembelianDiAtas100K) {
    $diskon += $totalPembelian * $diskonPembelianDiAtas100K;
}

$totalSetelahDiskon = $totalPembelian - $diskon;

echo "Total Pembelian: $totalPembelian" . "<br>";
echo "Diskon: $diskon" . "<br>";
echo "Total Setelah Diskon: $totalSetelahDiskon" . "<br>";

?>

