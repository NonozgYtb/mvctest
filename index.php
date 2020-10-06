<?php 
$in = time();
require_once "vendor/autoload.php";

use \Whoops\Run;
use \Whoops\Handler\PrettyPageHandler;
(new Run)->pushHandler(new PrettyPageHandler)->register();

require 'app/Router.php';
echo (
"<script>console.log('Généré en '+(Date.now()-".($in*1000).")+'ms')</script>"

);