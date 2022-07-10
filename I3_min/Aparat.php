<?php

// Aparat.php

class Aparat
{
    protected $dostupni_proizvodi = array();

    function __construct()
    {
        $this->getDostupniProizvodi();
        $this->prikazProizvoda();
        $this->odabirProizvoda();
    }

    function odabirProizvoda()
    {
        do
        {
            $o = readline("Odaberite zeljeni proizvod: ");
        }while(!key_exists($o, $this->dostupni_proizvodi));

        $this->naplataProizvoda($o);
    }

    function naplataProizvoda($odabir)
    {
        $proizvod = $this->dostupni_proizvodi[$odabir];
        echo "Cijena: " . $proizvod->getCijena() . "\n";
    }

    function prikazProizvoda()
    {
        if(is_array($this->dostupni_proizvodi))
        {
            foreach($this->dostupni_proizvodi as $key => $proizvod)
            {
                echo $key . " : " . $proizvod->getNaziv() . "\n";
            }
        }
    }

    function getDostupniProizvodi()
    {
        $files = scandir(__DIR__ . "\\proizvodi");

        if(is_array($files))
        {
            foreach($files as $key => $filename)
            {
                if($filename != "." && $filename != "..")
                {
                    $filename_array = explode(".", $filename);

                    $class = $filename_array[0];
                    $ext   = end($filename_array);

                    if($ext == "php")
                    {
                        include(__DIR__ . "\\proizvodi\\" . $filename);
                        $proizvod = new $class();

                        $this->dostupni_proizvodi[] = $proizvod;
                    }
                }
            }
        }
    }
}

?>