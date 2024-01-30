<?php

$waktu1 = "08.55";

$jam = substr($waktu1, 0, 2);

$menit = substr($waktu1, 3, 2);

$jamp = ($jam < 12) ? 'AM' : 'PM';

$jam = ($jam > 12) ? $jam - 12 : $jam;

$hasil = "$jam:$menit $jamp";

echo "$hasil";

?>