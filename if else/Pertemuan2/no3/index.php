<?php
$totalBelanjaAndi = 180000;
$potonganHarga = 10000;

if ($totalBelanjaAndi > 100000) {
    $totalBelanjaAndi -= $potonganHarga;
    echo "Andi mendapatkan voucher potongan harga 10.000. Total yang harus dibayar: $totalBelanjaAndi";
} else {
    echo "Andi tidak mendapatkan voucher potongan harga. Total yang harus dibayar: $totalBelanjaAndi";
}
?>
