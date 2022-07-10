<?php

class Ponuda 
{
    private $broj;
    private $datum;
    private $stavke = array();

    protected function setBroj($b)
    {
        $this->broj = $b;
    }
    public function getBroj()
    {
        return $this->broj;
    }

    protected function setDatum($d)
    {
        $this->datum = $d;
    }
    public function getDatum()
    {
        return $this->datum;
    }

    protected function setStavke(array $s)
    {
        $this->stavke = $s;
    }
    public function getStavke()
    {
        return $this->stavke;
    }
    

}




?>