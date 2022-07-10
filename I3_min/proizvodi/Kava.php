<?php

// Kava - TESTNI ILI POCETNI PROIZVOD

class Kava extends Proizvod
{
    protected $opcije = array();

    function __construct()
    {
        $this->setNaziv("Kava");
        $this->setCijena("5");
    }

    function getOpcija()
    {
        return $this->opcije;
    }

    function setOpcija($param)
    {
        $this->opcije[] = $param;
    }
}

?>