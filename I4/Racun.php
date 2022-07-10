<?php

class Racun extends Ponuda
{
    protected $broj;
    protected $datum; // 20221009141545

    function __construct($b)
    {
        parent::__construct($b);
        $this->setDatum(date("YmdHis"));
        $this->setBroj($this->getDatum());
    }

    function getDatum()
    {
        return $this->datum;
    }
    function setDatum($param)
    {
        $this->datum = $param;
    }

    public function setBroj($param) : void 
    {
        $this->broj = $param;
    }
}


?>