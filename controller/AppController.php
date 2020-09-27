<?php

namespace App\Controller;

use \App\Render;

class AppController
{

    public static function importController($url, $controllerStr, $action)
    {
        $urlNameSpace = implode("\\",explode(DIRECTORY_SEPARATOR,$url));
        $fullname = "App\Controller\\".$urlNameSpace.$controllerStr;
        if(is_callable([$fullname,$action])){
        $controller = new $fullname();
        return $controller->$action();
        }else{
            return false;
        }
    }

    public static function execute($url, $controllerStr, $action) {
        static::importController($url, $controllerStr, $action);
        (new Render)->render();
    }

}
