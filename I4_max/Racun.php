<?php

class Racun extends Ponuda
{
    protected $datum;

    function __construct()
    {
        parent::__construct();
        $this->setDatum("d-m-Y");
    }

    public function setDatum($datum)
    {
        $this->datum = $datum;
    }
    public function getDatum()
    {
        return $this->datum;
    }
}


?>