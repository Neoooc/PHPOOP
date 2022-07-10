<?php

class Ucenik
{
    protected $ime;
    protected $prezime;
    protected $prosjek;

    function __construct($i, $p, $po)
    {
        $this->setIme($i);
        $this->setPrezime($p);
        $this->setProsjek($po);
    }

    public function getIme()
    {
        return $this->ime;
    }
    public function getPrezime()
    {
        return $this->prezime;
    }  
    public function getProsjek()
    {
        return $this->prosjek;
    }
    
    public function setIme($i)
    {
        $this->ime = $i;
    }
    public function setPrezime($p)
    {
        $this->prezime = $p;
    }
    public function setProsjek($po)
    {
        $this->prosjek = $po;
    }
}



?>