<?php

// Proizvod.php

abstract class Proizvod
{
    protected $naziv;
    protected $cijena;

    abstract function getOpcija();
    abstract function setOpcija($param);

    function getNaziv()
    {
        return $this->naziv;
    }

    function setNaziv($param)
    {
        $this->naziv = $param;
    }

    function getCijena()
    {
        return $this->cijena;
    }

    function setCijena($param)
    {
        $this->cijena = $param;
    }    
}

?>