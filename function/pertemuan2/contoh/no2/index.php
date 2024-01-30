<?php

function sumMynumber(...$x) {
    $n = 0;
    for($i = 0; $i < count($x); $i++) {
        $n += $x[$i];
    }
    echo $n;
}

sumMynumber(5, 2, 6, 7, 7);