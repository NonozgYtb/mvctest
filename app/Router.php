<?php

namespace App;

use \App\Controller\AppController;

class Router
{

    private $router;
  
    public function __construct() {  
        
        $this->router = \App\Config\Singletons\RouterSingletons::AltoRouter();

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
            ->get('/news', 'home:news', "news");

        return $this;
    }

    private function match(): self
    {

        $match = $this->router->match();
        $logs = "[" . date("Y/m/d : H:i:s (P)") . "]";
        if ($match && isset($match["target"]) && gettype($match["target"]) == "string" && !empty(trim($match["target"]))) {
            $ex = [];
            $matches = explode("/", $match["target"]);
            foreach ($matches as $key => $val) {
                if (str_contains(":", $val) && $key < count($matches)) continue;
                (!empty($val)) ? $ex[] = ucwords($val) : false;
            };
            $ex2 = explode(":", $ex[count($ex) - 1]);
            unset($ex[count($ex) - 1]);
            $logser = [implode(DIRECTORY_SEPARATOR, $ex), $ex2[0] . "Controller", $ex2[1]];
            AppController::execute(...$logser);
            $logs .= " " . $logser[0] . $logser[1] . " " . $logser[2] . "()";
            if (!empty($match["get"])) {
                $logs .= " /  " . json_encode($match["get"]);
            }
        } else {
            $logs .= " " . $_SERVER["REQUEST_URI"] . " ";
            $dir = dirname(__DIR__) . DS . "public" . DS . str_replace("/", DS, $_SERVER["REQUEST_URI"]);
            if ((int)strpos($dir, "favicon.ico") === 0) {
                
            } elseif (isset($match["target"])) {
                $logs .= "Error: Undefined Controller or View";
            } elseif (!file_exists($dir)) {
                $logs .= "Error: No routes";
            }

            // ! InDev :
            /*$variab = array_filter(explode("/",$match), fn($value) => !is_null($value) && $value !== '');
            array_merge($variab, ["str" => implode("/",$variab)]);*/
            // ! EndDev :

            http_response_code(404);
            AppController::execute("", "ErrorController", "index");
        }

        file_put_contents('config/RouterLog.txt', "\n" . $logs, FILE_APPEND);

        return $this;
    }
}
