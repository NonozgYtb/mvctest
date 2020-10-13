<?php

namespace App\Controller;

use \App\Render;

class AppController
{

    public static function importController($url, $controllerStr, $action)
    {
        $urlNameSpace = implode("\\", explode(DIRECTORY_SEPARATOR, $url));
        $fullname = "App\Controller\\" . $urlNameSpace . $controllerStr;
        if (is_callable([$fullname, $action])) {
            $controller = new $fullname();
            return $controller->$action();
        } else {
            return false;
        }
    }

    public static function redirect($url)
    {
        header("Location: " . $url);
        exit;
    }

    public static function execute($url, $controllerStr, $action)
    {
        $returned = static::importController($url, $controllerStr, $action);
        if ($returned === false) {
            AppController::execute("", "ErrorController", "index");
        }
        if ($returned !== "no-view")
            Render::Instance()->render();
    }
}
