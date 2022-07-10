<?php

class Ponuda 
{
    protected $broj;
    protected $datum;
    protected $stavke = array();

    function __Construct()
    {
        $this->setBroj("1");
        $this->setDatum("Y-m-d");
        $this->setStavke("Jabuka");
    }

    public function getBroj()
    {
        return $this->broj;
    }
    public function getDatum()
    {
        return $this->datum;
    }
    public function getStavke()
    {
        return $this->stavke;
    }

    public function setBroj($broj)
    {
        $this->broj = $broj;
    }
    public function setDatum($datum)
    {
        $this->datum = $datum;
    }
    public function setStavke($stavke)
    {
        $this->stavke = $stavke;
    }
}


?>