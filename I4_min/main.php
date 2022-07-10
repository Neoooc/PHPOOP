<?php

include "Ponuda.php";
include "Racun.php";

$nPonuda = new Ponuda(readline("Unesi broj: "));

echo $nPonuda->getBroj();
echo "\n";

$nRacun = new Racun(readline("Unesi broj: "));

echo "\n";

echo $nRacun->getBroj();


?>