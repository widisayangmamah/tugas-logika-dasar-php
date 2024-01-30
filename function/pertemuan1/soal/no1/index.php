<?php

function tampilkanHariTanggal($date) {
    $namaHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    $namaDay = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thrusday', 'Friday', 'Saturday'];
    $hari = $namaHari[date('w', strtotime($date))];
    $day = $namaDay[date('w', strtotime($date))];
    $tanggal = date('d F Y', strtotime($date));
    echo($hari) . ", " . $tanggal;
    echo "<br>";
    echo($day) . ", " . $tanggal;
}

$date = date('D, d M Y');
tampilkanHariTanggal($date);

?>
