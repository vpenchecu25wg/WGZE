<?php
class Txapelketa
{
    private array $korrikalariak = [];


    function korrikalarigehitu($korrikalaria)
    {
        $this->korrikalariak[$korrikalaria->getKodea()] = $korrikalaria;
    }


    function gehitulasterketakorrikalariari($kodea, $denbora)
    {
        foreach ($this->korrikalariak as $codigoa => $korrikalaria) {
            if ($codigoa == $kodea) {
                $korrikalaria->lasterketagehitu($denbora);
            }
        }
    }

    function lehenLasterketarenBatezBestekoa()
    {
        $guztira = 0;
        $kopurua = 0;

        foreach ($this->korrikalariak as $korrikalaria) {
            $guztira += $korrikalaria->getLehenLasterketa();
            $kopurua++;
        }

        return $guztira / $kopurua;
    }

    function azkarrena($arrayKorrikalaria)
    {
        $azkarrenaT = PHP_INT_MAX;
        $azkarrenaK = "";


        foreach ($arrayKorrikalaria as $korrikalaria) {
            $denbora = $korrikalaria->getTimeOfRaces($korrikalaria->getKodea());

            if ($denbora < $azkarrenaT && $denbora > 0) {
                $azkarrenaT = $denbora;
                $azkarrenaK = $korrikalaria->getKodea();
            }
        }

        return "azkarrena:  " . $azkarrenaK . ". Denbora: " . $azkarrenaT;
    }

    function korrikalariMantxo($arrayKorrikalaria)
    {
        $matxoKorrika = [];

        foreach ($arrayKorrikalaria as $korrikalaria) {
            $batuketa = $korrikalaria->batuAllRaces();
            if ($batuketa > 15) {
                $kodea = $korrikalaria->getKodea();
                array_push($matxoKorrika, $kodea);
            }
        }

        return $matxoKorrika;
    }


    function endsWithE($korrikalaria){
        $endsWithE = [];

        foreach($korrikalaria as $korrik){
        if(substr($korrik->getIzena(), -1) == "e" || substr($korrik->getIzena(), -1) == "E"){
            array_push($endsWithE,$korrik->getIzena());
        }
        }
        return $endsWithE;
    }
}
