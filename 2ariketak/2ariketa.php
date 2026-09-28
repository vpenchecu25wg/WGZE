<?php
/* Sortu funtzio bat, non 2 zenbaki jasoko ditu parametro gisa eta HTML 
taula bat sortuko du, non lehen zenbakiaren errenkada kopurua eta bigarren 
zenbakiaren zutabe kopurua izango duen
 */
$errenkada = 10; // filas
$zutabe = 3; // columnas

echo '<table style="border-collapse: collapse; border: 1px solid black;">';
    echo '<tr style="border-collapse: collapse; border: 1px solid black;">';

    for ($j = 1; $j <= $zutabe; $j++){
            echo '<th style="border-collapse: collapse; border: 1px solid black;">';
            echo "header";
            echo '</th>';
    };
    echo '</tr>';

    for ($k = 1; $k <= $errenkada; $k++){
    echo '<tr style="border-collapse: collapse; border: 1px solid black;">';
    for ($x = 1; $x <= $zutabe; $x++){
        echo '<td style="border-collapse: collapse; border: 1px solid black;">';
        echo "texto";
    };
    };

    echo '</tr>';
echo '</table>';

?>