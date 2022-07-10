<?php
include "view.php";
include "Model.php";
include "Controller.php";

$ctr = new Controller();

$counter = readline("How many BMIs do you want to check: ");

for ($counter; $counter > 0; $counter--);
{
    $ctr->main();
}




?>