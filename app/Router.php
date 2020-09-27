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

        // map homepage
        $this->router->get('/', 'home:index', "index");

        // map user details page
        $this->router->get('/user/[i:id]/', '/Gjd/admgin//hex:post', "user");

        return $this;
    }

    private function match(): self
    {

        $match = $this->router->match();

        if ($match && gettype($match["target"]) == "string") {
            $ex = [];
            $matches = explode("/", $match["target"]);
            foreach ($matches as $key => $val) {
                if (str_contains(":", $val) && $key < count($matches)) continue;
                (!empty($val)) ? $ex[] = ucwords($val) : false;
            }
            $ex2 = explode(":", $ex[count($ex) - 1]);
            unset($ex[count($ex) - 1]);
            AppController::execute(implode(DIRECTORY_SEPARATOR, $ex), $ex2[0] . "Controller", $ex2[1]);
        }

        return $this;
    }
}
return new Router();