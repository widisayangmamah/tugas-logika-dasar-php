<?php

function biodata($nama,$jurusan = "PPLG" ) {
    echo "Hello $nama anda diterima sebagai siswa jurusan $jurusan";
}

biodata("Putri");
biodata("Putra", "TJKT"); 

?>
