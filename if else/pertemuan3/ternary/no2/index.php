<?php
    $hariIni = date('l');
    $upacara = ($hariIni == 'Monday') ? 'hari ini upacara' : 'hari ini tidak upacara';
    echo $upacara;
?>