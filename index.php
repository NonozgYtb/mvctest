<?php 
require_once "vendor/autoload.php";

use \Whoops\Run;
use \Whoops\Handler\PrettyPageHandler;
(new Run)->pushHandler(new PrettyPageHandler)->register();

require 'app/Router.php';