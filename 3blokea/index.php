<?php

require_once "Korrikalari.php";
require_once "Txapelketa.php";
$korrikalariak = [
    $korrikalaria1 = new Korrikalari("Ane", "K001"),
    $korrikalaria2 = new Korrikalari("Jon", "K002"),
    $korrikalaria3 = new Korrikalari("Mikel", "K003"),
    $korrikalaria3 = new Korrikalari("Juane", "K004"),
];

$txapelketa = new Txapelketa();

$txapelketa->korrikalarigehitu($korrikalaria1);
$txapelketa->korrikalarigehitu($korrikalaria2);
$txapelketa->korrikalarigehitu($korrikalaria3);

$txapelketa->gehitulasterketakorrikalariari("K001", 10);
$txapelketa->gehitulasterketakorrikalariari("K001", 16);
$txapelketa->gehitulasterketakorrikalariari("K001", 17);
$txapelketa->gehitulasterketakorrikalariari("K002", 12);
$txapelketa->gehitulasterketakorrikalariari("K003", 8);

$media = $txapelketa->lehenLasterketarenBatezBestekoa();

echo "Lehenengo lasterketaren batez bestekoa: " . $media;

echo '<pre></pre>';
$rapido = $txapelketa->azkarrena($korrikalariak);

echo $rapido;

echo '<pre></pre>';
$denboraAsko = $txapelketa->korrikalariMantxo($korrikalariak);

echo "15 segundu bahino gehiago 2 lasterketetan: " .implode(',', $denboraAsko);

echo '<pre></pre>';

echo "E-rekin bukatzen diren izenak:";
echo '<pre></pre>';

$erekin = $txapelketa->endsWithE($korrikalariak);
echo implode(', ', $erekin);