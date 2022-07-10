<?php

class View 
{
    function Menu()
    {
        echo "[1] BMI Calculation: \n";
        echo "[2] Coming Soon: :) \n";
    }
function showResult($r)
{
    echo "Result: [" . $r . "]\n";
}

function Error($e)
{
    echo "Error: " . $e . "\n";
}

}



?>