<?php
class Korrikalari{
private $izena;
private $kodea;
private $lasterketa = [];

function __construct($izena,$kodea){
    $this->izena = $izena;
    $this->kodea = $kodea;
}

function lasterketagehitu($denbora){

    if(count($this->lasterketa) > 5 || $denbora < 5){
        throw new Exception ("5 lasterketetan ezin da parte hartu");
    }else{
        array_push($this->lasterketa, $denbora);
        echo "Lasterketa gordeta";
    }
}

}
?>