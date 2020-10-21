<?php
use App\Render; 
Render::getInstance()->setHeadStr('<link rel="icon" href="/icon/favicon.jpg" sizes="240x240">');?>

<?=\App\Render::getInstance()->getContent()?>

<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/jquery-easing/jquery.easing.min.js"></script>