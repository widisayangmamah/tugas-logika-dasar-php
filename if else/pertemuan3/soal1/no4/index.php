<?php
 
 $panjangTanah = 13; //meter
 $lebarTanah = 9; //meter

 $luasTanah = $panjangTanah * $lebarTanah;

 if ($luasTanah < 90) {
    $tipeRumah = "Tipe 36";
} elseif ($luasTanah >= 90 && $luasTanah < 96) {
    $tipeRumah = "Tipe 45";
} elseif ($luasTanah >= 96 && $luasTanah <120 ){
    $tipeRumah = "Tipe 54";
} elseif ( $luasTanah >= 120 && $luasTanah <150) {
    $tipeRumah = "Tipe 60";
} else {
    $tipeRumah = "Tipe 70";
}

echo "Luas tanah yang dimiliki Dani adalah $luasTanah M2, sehingga dapat membangun rumah dengan tipe $tipeRumah.";

?>