<?php 

$beratBadan = 44;
$tinggiBadan = 148;

$tinggiBadanMeter = $tinggiBadan / 100; 
$imt = $beratBadan / ($tinggiBadanMeter * $tinggiBadanMeter);

if ($imt < 18.5) {
    $kategori = "berat badan kurang";
}elseif ($imt >= 18.5 && $imt < 22.9) {
    $kategori = "normal";
}elseif ($imt >= 22.9 && $imt <24.9) {
    $kategori = "berat badan lebih";
} else {
    $kategori = "obesitas";
}

echo "IMT Beni adalah " . round($imt, 2) . ". Beni termasuk dalam kategori '" . $kategori . "'.";
?>