<?php
use App\Render;
?>
<?=\App\Render::getInstance()->getContent()?>



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="js/jqBootstrapValidation.js"></script>

<script src="js/agency.js"></script>

<?= Render::getInstance()
  ->setHeadStr('<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">')
  ->setHeadStr('<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">')
  ->setHeadStr('<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">')
  ->setHeadStr('<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">')
  ->setHeadStr('<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">')
  ->setHeadStr('<link href="css/agency.css" rel="stylesheet">')
  ->setHeadStr('<link rel="stylesheet" href="css/custom.css">')
  ->setHeadStr('<link rel="icon" href="/icon/favicon.jpg" sizes="240x240">') ?>