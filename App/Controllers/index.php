<?php

namespace App\Controllers;

use App\Models\Artigo;
use DIY\Controller\Action;

class Index extends Action
{
    public function index()
    {
        $artigo = new Artigo(\App\Init::getDB());
        $artigos = $artigo->fetchAll();
        $this->view->artigos = $artigos;
        $this->render('index');
    }

    public function empresa()
    {
        $this->render('empresa');
    }
}