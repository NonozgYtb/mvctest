<?php

namespace App;

use NonozgYtb\AltoRouter;
use \App\Controller\AppController;

class Router
{

    private $router;

    public function __construct()
    {

        $this->router = new AltoRouter();

        $this
            ->setRoutes()
            ->match();

        return $this;
    }

    private function setRoutes(): self
    {
        $this->router

            // map homepage
            ->get('/', 'home:index', "index")

            // map user details page
            ->get('/user/[i:id]', "");

        return $this;
    }

    private function match(): self
    {

        $match = $this->router->match();
        /*if (!isset($match["target"])) {
            $match["target"] = "error:index";
            http_response_code(404);
        }*/
        if ($match && isset($match["target"]) && gettype($match["target"]) == "string" && !empty(trim($match["target"]))) {
            $ex = [];
            $matches = explode("/", $match["target"]);
            foreach ($matches as $key => $val) {
                if (str_contains(":", $val) && $key < count($matches)) continue;
                (!empty($val)) ? $ex[] = ucwords($val) : false;
            }
            $ex2 = explode(":", $ex[count($ex) - 1]);
            unset($ex[count($ex) - 1]);
            AppController::execute(implode(DIRECTORY_SEPARATOR, $ex), $ex2[0] . "Controller", $ex2[1]);
        } else {

            // ! InDev :
            /*$variab = array_filter(explode("/",$match), fn($value) => !is_null($value) && $value !== '');
            array_merge($variab, ["str" => implode("/",$variab)]);*/
            // ! EndDev :

            http_response_code(404);
            AppController::execute("", "ErrorController", "index");
        }

        return $this;
    }
}
return new Router();
