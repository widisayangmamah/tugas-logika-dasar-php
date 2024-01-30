<?php
function hitungLembarRupiah($jumlah)
{
    $denominasi = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];

    $hasil = [];

    foreach ($denominasi as $nilai) {
        $lembar = floor($jumlah / $nilai);
        $jumlah %= $nilai;

        if ($lembar > 0) {
            $hasil["$nilai"] = $lembar;
        }
    }
    return $hasil;
}

$jumlahUang = 140500;
$lembarRupiah = hitungLembarRupiah($jumlahUang);

foreach ($lembarRupiah as $nilai => $lembar) {
    echo "Rp. $nilai : $lembar lembar\n";
}
?>