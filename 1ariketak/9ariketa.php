<?php
$salduta = 10000;

$output = match(true){
    $salduta < 10000 => ($salduta * 5) / 100,
    $salduta >= 10000 && $salduta <= 20000 => ($salduta * 8) / 100 ,
    $salduta > 20000 && $salduta <= 40000 => ($salduta * 10) / 100 ,
    $salduta > 40000 => ($salduta * 13) / 100 ,
};

echo "Komisioa " .$output. " -koa da.";
?>