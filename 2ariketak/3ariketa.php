<?php
$zenbakiak = [];


for($x = 0; $x <= 20; $x++){
    $zenbakia = rand(0,500);
    array_push($zenbakiak, $zenbakia);
};

$handiena = max($zenbakiak);
$txikiena = min($zenbakiak);
$batuketa = array_sum($zenbakiak);
$average = array_sum($zenbakiak) / count($zenbakiak);



echo implode(", ",$zenbakiak);
echo '<pre></pre>';
echo "<p style='color:blue'>Handiena: $handiena</p>";
echo '<pre></pre>';
echo "<p style='color:red'>Txikiena: $txikiena</p>";
echo '<pre></pre>';
echo "Batuketa= " .array_sum($zenbakiak);
echo '<pre></pre>';
echo "Media= " .round($average,2);

?>