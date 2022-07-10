<?php

class Controller
{
    function Main()
    {
        $model = new Model();

        $model->menu();
        $choice = readline("Choose operation: ");
        $weight = readline("Insert weight: ");
        $height = readline("Insert height: ");

        if($choice == "1")
        {
            $model->getBMI($weight, $height);
        }
    }
}



?>