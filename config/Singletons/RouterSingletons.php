<?php

namespace App\Config\Singletons;

use \NonozgYtb\AltoRouter;

class RouterSingletons
{
    /**
     * @var AltoRouter
     * @access private
     * @static
     */
    private static $_instance = null;

    /**
     * Méthode qui crée l'unique instance de la classe
     * si elle n'existe pas encore puis la retourne.
     *
     * @param void
     * @return \NonozgYtb\AltoRouter
     */
    public static function getInstance()
    {

        if (is_null(self::$_instance)) {
            self::$_instance = new AltoRouter();
        }

        return self::$_instance;
    }

    public static function AltoRouter()
    {
        return self::getInstance();
    }
}
