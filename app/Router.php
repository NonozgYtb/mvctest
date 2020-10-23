<?php

namespace App;

use \App\Controller\AppController;
use App\Utils\Str;

class Router
{

    private $router;

    public function __construct()
    {

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
            ->map('GET', '/', 'home:index', "index")
            ->map('GET', '/news', 'home:news', "news")
            ->map('GET', '/staff', 'home:staff', 'staff')
            ->map('GET', '/history', 'home:history', 'history')
            ->map('GET', '/tester', 'home:tester', 'tester')

            ->map('GET', '/login', 'login:login', 'login')
            ->map('GET', '/logger', 'login:login', 'login2')
            ->map('POST', '/logger', 'login:loginPost', 'logger');

        return $this;
    }

    private function match(): self
    {
        $match = $this->router->match();
        $ip = "";
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $logs = "[" . date("Y/m/d : H:i:s (P)") . "] " . $ip . " ";
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
            Render::getInstance()->setHead($match['name'], "pagename");
            AppController::execute(...$logser);
            $logs .= " " . $logser[0] . $logser[1] . " " . $logser[2] . "()";
            if (!empty($match["get"])) {
                $logs .= " /  " . json_encode($match["get"]);
            }
        } else {
            $logs .= " " . $_SERVER["REQUEST_URI"] . " ";
            $dir = dirname(__DIR__) . DS . "public" . DS . str_replace("/", DS, $_SERVER["REQUEST_URI"]);
            if (isset($match["target"])) {
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
        try {
            if (!empty($logs) && !Str::strContainArray($logs, [".css", ".ico"]))
                file_put_contents(dirname(__DIR__) . DS . "config" . DS . "RouterLog.txt", $logs."\n", FILE_APPEND);
        } catch (\Throwable $e) {
        }

        return $this;
    }
}
