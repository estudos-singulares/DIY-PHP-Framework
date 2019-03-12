<?php

namespace App\Controllers;

class Index
{
    private $view;

	public function __construct()
	{
        $this->view = new \stdClass;
    }

	public function index()
	{
        $this->view->x = 1;
        $nomes = array();
        $nomes[] = "Alessandro";
        $nomes[] = "José";
        $this->view->nomes = $nomes;
        include '../App/Views/Index/index.phtml';
    }

    public function empresa()
    {
        include '../App/Views/Index/empresa.phtml';
    }
}