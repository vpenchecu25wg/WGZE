<?php
class Korrikalari
{
    private $izena;
    private $kodea;
    private $lasterketa = [];

    function __construct($izena, $kodea)
    {
        $this->izena = $izena;
        $this->kodea = $kodea;
    }

    function lasterketagehitu($denbora)
    {

        if (count($this->lasterketa) > 5 || $denbora < 5) {
            throw new Exception("5 lasterketetan ezin da parte hartu");
        } else {
            array_push($this->lasterketa, $denbora);
        }
    }

    function getIzena()
    {
        return $this->izena;
    }

    function getKodea()
    {
        return $this->kodea;
    }

    function getLehenLasterketa()
    {
        if(isset($this->lasterketa[0])){
        return $this->lasterketa[0];
        }
    }

    function getTimeOfRaces($userKodea)
    {
        if ($userKodea == $this->kodea) {
            for ($x = 0; $x <= count($this->lasterketa); $x++) {
                if(isset($this->lasterketa[0])){
                    return $this->lasterketa[$x];
                }
            }
        }
    }

    function batuAllRaces(){
        $batuketa = 0;
        for ($x = 0; $x < count($this->lasterketa); $x++){
            $batuketa += $this->lasterketa[$x];
        }
        return $batuketa;
    }
}
