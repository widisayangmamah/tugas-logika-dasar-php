<?php

function jurusanwk(...$jurusan)
{
    $wkJurusan = [];

    foreach ($jurusan as $namaJurusan) {
        $jurusanCapsLock = strtoupper($namaJurusan);
        if (!in_array($jurusanCapsLock, $wkJurusan)) {
            $wkJurusan[] = $jurusanCapsLock;
        }
    }

    return $wkJurusan;
}

$hasiljurusan = jurusanwk("PPLG", "HTL", "KLN", "PMN", "pplg");

echo "Hasil Jurusan: ";
foreach ($hasiljurusan as $jurusan) {
    echo $jurusan . " ";
}
