<?php

$nasi_goreng = 15000 ;
$ayam_bakar = 20000 ;
$nasi_kebuli = 25000 ;
$aneka_jus = 8000 ;
$esteh_manis = 3000 ;
$es_jeruk = 5000 ;
$paket = $nasi_kebuli + $nasi_kebuli + $ayam_bakar + $nasi_goreng + $nasi_goreng;
$diskon = 0;
$tanggal = date("l-m-Y");
$hari = date("l");

if ($hari == "Friday") {
    $diskon = 5;
}elseif ($hari == "Monday") {
    $diskon = 2;
}else{
    $diskon = 0;
}


$paket *= ((100 - $diskon) / 100);

echo "Tanggal: $tanggal";
echo "<br>";
echo "ini bukan hari senin atau jumat : $paket";
echo " <br>";
echo "Diskon : $diskon %";

?>