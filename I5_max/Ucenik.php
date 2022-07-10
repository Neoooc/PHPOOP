<?php

class Ucenik
{
    protected $ime;
    protected $prezime;
    protected $prosjek;

    function __construct($i, $p, $pro)
    {
        $this->setIme($i);
        $this->setPrezime($p);
        $this->setProsjek($pro);
    }

    protected function setIme($i)
    {
        $this->ime = $i;
    }
    public function getIme()
    {
        return $this->ime;
    }

    protected function setPrezime($p)
    {
        $this->prezime = $p;
    }
    public function getPrezime()
    {
        return $this->prezime;
    }

    protected function setProsjek($pro)
    {
        $this->prosjek = $pro;
    }
    public function getProsjek()
    {
        return $this->prosjek;
    }

    public function Ispis()
    {
        return array($this->getIme(),$this->getPrezime(), $this->getProsjek());
    }


}




?>