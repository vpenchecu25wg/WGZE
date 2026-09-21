<?php
$izarrak = 8;

if ($izarrak %2 != 0){
    echo "zenbakia ez da bikoitia";
} else {
    for ($x = 0; $x < $izarrak/2; $x++){
        echo "_";
        for ($y = 0; $y < $x+2; $y++){
            echo "*";
        }
        echo "<br>";
    };
};


?>