<?php

use App\Render;
use App\Config\Singletons\RouterSingletons;

$arr = [
  "index" => "Accueil",
  "news" => "News",
  "staff" => "Équipe",
  "history" => "Histoire"
];

$body = Render::getInstance()->getBody(); ?>
<nav class="navbar navbar-expand-lg navbar-dark <?= (isset($body["stiky-nav"]) && $body["stiky-nav"] == true) ? "nav" : "fixed" ?>-top navbar-shrink" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="<?= RouterSingletons::AltoRouter()->generate("index") ?>"><span class="fas fa-radiation" style="padding-right: 10px"></span>BunkerFinal</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase mr-auto">
        <?php
        foreach ($arr as $name => $str) : ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger<?= (Render::getInstance()->getHead()["pagename"] == $name) ? " active" : "" ?>" href="<?= RouterSingletons::AltoRouter()->generate($name) ?>"><?= $str ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a style="font-size: 0.8em;" href="<?= RouterSingletons::AltoRouter()->generate("login") ?>" class="btn btn-primary rounded-pill btn-md text-uppercase js-scroll-trigger color-black mx-auto">Se Connecter</a>
        </li>
      </ul>
    </div>

  </div>
</nav>
<?php /*<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>*/ ?>

<?= Render::getInstance()->getContent() ?>
<?php if (!isset($body["no-footer"]) || $body["no-footer"] !== true) :
?>
  <footer class="bg-secondary color-white footer">
    <div class="container">
      <div class="row align-items-center font-weight-bold m-0">
        <div class="col-md-4">
          <span class="copyright">Copyright </span><i class="fas fa-copyright"></i><span class="copyright"> BunkerFinal 2020 </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="mentionslegales" class="color-white">Mentions légales</a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="color-white">CGU</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
<?php endif; ?>

<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top bg-primary color-white" role="button"><i class="fas fa-chevron-up"></i></a>

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
  ->setHeadStr('<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">')
  ->setHeadStr('<link href="css/agency.css" rel="stylesheet">')
  ->setHeadStr('<link href="css/fonts/TrendSans.css" rel="stylesheet">')
  ->setHeadStr('<link rel="icon" href="/icon/favicon.jpg" sizes="240x240">') ?>