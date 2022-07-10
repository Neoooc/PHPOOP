<?php

// Ponuda.php

class Ponuda
{
    protected $broj;
    protected $datum;
    protected $stavke = array();

    function __construct($b)
    {
        $this->setBroj($b);
        $this->setDatum(date("Y-m-d"));
    }

    function getBroj()
    {
        return $this->broj;
    }

    function setBroj($param)
    {
        $this->broj = $param;
    }

    function getDatum()
    {
        return $this->datum;
    }

    function setDatum($param)
    {
        $this->datum = $param;
    } 
    
    function getStavke()
    {
        return $this->stavke;
    }

    function setStavka($param)
    {
        $this->stavke[] = $param;
    }
}

?>