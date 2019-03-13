<?php

namespace App;

use DIY\Init\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['home'] = array('route' => '/', 'controller' => 'index', 'action' => 'index');
        $ar['empresa'] = array('route' => '/empresa', 'controller' => 'index', 'action' => 'empresa');
        $this->setRoutes($ar);
    }

    public static function getDB()
    {
        $dbUser = "root";
        $dbPassword = "";
        $StrConnection = "mysql:host=localhost;dbname=mvc";

        $db = new \PDO($StrConnection, $dbUser, $dbPassword);
        return $db;
    }
}