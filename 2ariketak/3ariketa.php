<?php
$zenbakiak = [];
$handiena = PHP_INT_MIN;
$txikiena = PHP_INT_MAX;


for($x = 0; $x <= 20; $x++){
    $zenbakia = rand(0,500);
    array_push($zenbakiak, $zenbakia);
    if($zenbakia > $handiena){
        $handiena = $zenbakia;
    }elseif($zenbakia < $txikiena){
        $txikiena = $zenbakia;
    }
};

echo implode(", ",$zenbakiak);
echo '<pre></pre>';
echo "<p style='color:blue'>Handiena: $txikiena</p>";
echo '<pre></pre>';
echo "<p style='color:red'>Txikiena: </p>";
echo '<pre></pre>';
echo "Batuketa= " .array_sum($zenbakiak);

?>