<?php
class Txapelketa{
    private array $korrikalariak = [];


    function korrikalarigehitu($korrikalari){
        $this->korrikalariak[$korrikalari->izena] = $korrikalari;
    }


    function gehitulasterketakorrikalariari($kodea, $denbora){
        foreach($this->korrikalariak as $korrikalariak => $codigoa){
            if($codigoa == $kodea){
                $korrikalariak->lasterketagehitu($denbora);
            }
        }
    }
}
?>