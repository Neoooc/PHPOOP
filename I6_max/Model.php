<?php

class Model
{
    protected $view;

    function __construct()
    {
        $this->view = new View();
    }

    function menu()
    {
        $this->view->Menu();
    }

    function getBMI($w, $h)
    {
        $result = number_format($w / pow(($h/100),2),1);

        $this->view->ShowResult($result);
    }
}



?>