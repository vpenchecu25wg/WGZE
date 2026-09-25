<?php
/* Sortu funtzio bat, non 2 zenbaki jasoko ditu parametro gisa eta HTML 
taula bat sortuko du, non lehen zenbakiaren errenkada kopurua eta bigarren 
zenbakiaren zutabe kopurua izango duen
 */
$errenkada = 2;
$zutabe = 10;

echo '<table style="border-collapse: collapse; border: 1px solid black;">';
for ($x = 1; $x <= $errenkada; $x++){
    echo '<tr style="border-collapse: collapse; border: 1px solid black;">';

    for ($j = 1; $j <= $zutabe; $j++){
        if ($j == 1){
            echo '<th style="border-collapse: collapse; border: 1px solid black;">';
            echo "header";
            echo '</th>';
        }else{
        echo '<td style="border-collapse: collapse; border: 1px solid black;">';
        echo "texto";
        };
    };

    echo '</tr>';

};
echo '</table>';

?>