<?php

class ucenikMgr
{
    private static $instanca;
    protected $lista_ucenika = array();
    
    public function getListaUcenika()
    {
        return $this->lista_ucenika;
    }

    public function setListaUcenika($lu)
    {
        $this->lista_ucenika[] = $lu;
    }

    public function Prikaz()
    {
        $lista_ucenika = $this->getListaUcenika();

        foreach ($lista_ucenika as $key => $val)
        {
            echo $val->getIme() . " " . $val->getPrezime() . " [" . $val->getProsjek() . "]\n";
        }
    }

    public static function  getInstanca()
    {
        if (!isset(self::$instanca))
        {
            self::$instanca = new self;
        }
        return self::$instanca;
    }

    public function OpciUnos()
    {
        $i = readline("Unesite ime učenika: ");
        $p = readline("Unesite prezime učenika: ");
        $po = readline("Unesite prosjek ocjena učenika: ");
        $this->setListaUcenika(new Ucenik($i, $p, $po));
    }
}


?>