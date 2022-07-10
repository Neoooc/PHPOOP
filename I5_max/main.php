<?php
include "Ucenik.php";

$counter = readline("Koliko ucenika zelite unijeti: ");
$ucenici = array();

for($counter; $counter>0; $counter--)
{
    $i = readline("Unesite ime ucenika: ");
    $p = readline("Unesite prezime ucenika: ");
    $pro = readline("Unesite prosjek ucenika: ");
    $novi_ucenik = new Ucenik($i,$p,$pro);
    $ucenici[] = $novi_ucenik->Ispis();
}

echo "\n ||Ispis podataka o ucenicima||\n";

print_r($ucenici);

foreach($ucenici as $val)
{
    for ($i = 0; $i < count($val); $i++){
        echo $val[$i] . " ";
    }
    echo "\n";
}

?>