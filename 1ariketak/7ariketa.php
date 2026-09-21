<?php
$number = 34;
$output = 0;

if($number < 0 ){
    echo "Zenbakia positiboa izan behar da";
}else if ($number % 2 == 0){
    $output = $number/2;
    echo "<p>$output</p>";
}
else{
    $output = ($number*3) + 1;
    echo "<p>$output</p>";
};

?>