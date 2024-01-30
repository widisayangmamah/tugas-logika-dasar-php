<?php
 $usia = 17;
 $waktuTidur = "";

 if ($usia >= 6 && $usia < 12 ) {
    $waktuTidur = "10 Jam"; 
 }elseif ($usia >= 12 && $usia <18 ) {
    $waktuTidur = "8-9 jam";
 }elseif ($usia >= 18 && $usia <= 40) {
    $waktuTidur = "7-8 jam";
 }else {
    $waktuTidur = "Usia tidak dalam rentang yang ditentukan.";
 }

 echo "Waktu tidur yang baik untuk usia " . $usia . " tahun adalah " . $waktuTidur;
?>