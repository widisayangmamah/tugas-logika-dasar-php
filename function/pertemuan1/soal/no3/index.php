<?php

function bandingkanNama($nama1, $nama2) {
    $panjangNama1 = strlen($nama1);
    $panjangNama2 = strlen($nama2);

    echo "Jumlah karakter $nama1: $panjangNama1<br>";
    echo "Jumlah karakter $nama2: $panjangNama2<br>";

    if ($panjangNama1 > $panjangNama2) {
        echo "$nama1 memiliki lebih banyak karakter daripada $nama2.<br>";
        echo "Selisih karakter: " . ($panjangNama1 - $panjangNama2);
    } elseif ($panjangNama1 < $panjangNama2) {
        echo "$nama2 memiliki lebih banyak karakter daripada $nama1.<br>";
        echo "Selisih karakter: " . ($panjangNama2 - $panjangNama1);
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama.";
    }
}

$nama1 = "widi wibowo";
$nama2 = "hillman farizi ali";

bandingkanNama($nama1, $nama2);

?>
