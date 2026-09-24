<?php
$izarrak = 8;

if ($izarrak % 2 != 0) {
    echo "zenbakia ez da bikoitia";
} else {
    for ($x = 0; $x < $izarrak; $x++) { // cada linea
        if ($x != 0) {
            echo '<pre>';
        }
        for ($j = $izarrak - 2; $j >= $x; $j--) { // espacios blancos
            echo " ";
        }
        for ($y = 0; $y < $x + $j; $y++) { // estrellas
            echo "*";
        }
        echo '</pre>';
    };
};
