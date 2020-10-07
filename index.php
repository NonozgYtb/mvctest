<?php 
define("DS", DIRECTORY_SEPARATOR);
$in = time();
require_once "vendor/autoload.php";

use App\Config\Singletons\RouterSingletons;
use \Whoops\Run;
use \Whoops\Handler\PrettyPageHandler;
(new Run)->pushHandler(new PrettyPageHandler)->register();

require 'app/Router.php';
new App\Router;
echo (
"<script>console.log('Généré en '+(Date.now()-".($in*1000).")+'ms')</script>"

);