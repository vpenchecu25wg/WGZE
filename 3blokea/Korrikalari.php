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
    }
}

function getIzena(){
    return $this->izena;
}

function getKodea(){
    return $this->kodea;
}

function getLehenLasterketa(){
    return $this->lasterketa[0];
}

function azkarrena(){
        $azkarrenaT = PHP_INT_MAX;
        $azkarrenaK = "";
        foreach($this->lasterketa as $clave => $valor){
            if($valor < $azkarrenaT){
                $azkarrenaT = $valor;
                $azkarrenaK = $clave;
            }
        }
        return "azkarrena:  " .$azkarrenaK. ". Denbora: " .$azkarrenaT;
    }
}
?>