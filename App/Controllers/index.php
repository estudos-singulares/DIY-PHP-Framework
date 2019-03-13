<?php

namespace App\Controllers;

use DIY\Controller\Action;

class Index extends Action
{
	public function index()
	{
        $nomes = array();
        $nomes[] = "Alessandro";
        $nomes[] = "José";
        $this->view->nomes = $nomes;
        $this->render('index');
    }

    public function empresa()
    {
        $this->render('empresa');
    }
}