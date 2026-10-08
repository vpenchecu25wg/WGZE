<?php
class Film{
    private $izena;
    private $ISAN;
    private $urtea;
    private $puntuazioa;

    function __construct($izena,$ISAN,$urtea,$puntuazioa)
    {
        $this->izena = $izena;
        $this->isan = $ISAN;
        $this->urtea = $urtea;
        $this->puntuazioa = $puntuazioa;
    }

    function ikusifilma (){
            echo "Izena: " .$this->izena;
            echo "<pre></pre>";
            echo "Urtea: " .$this->urtea;
            echo "<pre></pre>";
            echo "Puntuazioa: " .$this->puntuazioa;
    }
}
?>