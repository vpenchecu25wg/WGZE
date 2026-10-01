<?php
class Txapelketa{
    private array $korrikalariak = [];


    function korrikalarigehitu($korrikalaria){
        $this->korrikalariak[$korrikalaria->getKodea()] = $korrikalaria;
    }


    function gehitulasterketakorrikalariari($kodea, $denbora){
        foreach($this->korrikalariak as $codigoa => $korrikalaria){
            if($codigoa == $kodea){
            $korrikalaria->lasterketagehitu($denbora);
            }
        }
    }

    function lehenLasterketarenBatezBestekoa(){
    $guztira = 0;
    $kopurua = 0;

    foreach($this->korrikalariak as $korrikalaria){
        $guztira += $korrikalaria->getLehenLasterketa();
        $kopurua++;
    }

    return $guztira / $kopurua;
    }  

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
}
?>