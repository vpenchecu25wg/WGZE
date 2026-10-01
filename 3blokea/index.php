<?php

require_once "Korrikalari.php";
require_once "Txapelketa.php";

$korrikalaria1 = new Korrikalari("Ane", "K001");
$korrikalaria2 = new Korrikalari("Jon", "K002");
$korrikalaria3 = new Korrikalari("Mikel", "K003");


$txapelketa = new Txapelketa();

$txapelketa->korrikalarigehitu($korrikalaria1);
$txapelketa->korrikalarigehitu($korrikalaria2);
$txapelketa->korrikalarigehitu($korrikalaria3);

$txapelketa->gehitulasterketakorrikalariari("K001", 10);
$txapelketa->gehitulasterketakorrikalariari("K002", 12);
$txapelketa->gehitulasterketakorrikalariari("K003", 8);

$media = $txapelketa->lehenLasterketarenBatezBestekoa();

echo "Lehenengo lasterketaren batez bestekoa: " . $media;

function azkarrena(){
        $azkarrenaT = PHP_INT_MAX;
        $azkarrenaK = "";
        foreach($this->korrikalariak as $clave => $valor){
            if($valor < $azkarrenaT){
                $azkarrenaT = $valor;
                $azkarrenaK = $clave;
            }
        }
        return "azkarrena:  " .$azkarrenaK. ". Denbora: " .$azkarrenaT;
}
?>