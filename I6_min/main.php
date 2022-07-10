<?php

include "ucenik.php";
include "ucenikmgr.php";

$nMgr = ucenikMgr::getInstanca();

$counter = readline("Koliko ucenika zelite unijeti: ");

for($counter; $counter>0; $counter--)
{
    $nMgr->OpciUnos();
}

$nMgr->Prikaz();





?>