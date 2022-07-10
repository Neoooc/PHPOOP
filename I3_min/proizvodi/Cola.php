<?php

class Cola extends Proizvod
{
    protected $opcije = array();

    function __construct()
    {
        $this->setNaziv("Cola");
        $this->setCijena("7");
    }

    function getOpcija()
    {
        return $this->opcije;
    }
    function setOpcija($p)
    {
        $this->opcije[] = $p;
    }
}



?>