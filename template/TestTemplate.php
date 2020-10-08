<?php

use App\Render; ?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top"><span class="fas fa-radiation" style="padding-right: 10px"></span>BunkerFinal</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?=\App\Config\Singletons\RouterSingletons::AltoRouter()->generate("index")?>">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?=\App\Config\Singletons\RouterSingletons::AltoRouter()->generate("news")?>">news</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
        <li class="nav-item mx-auto mr-lg-0 ml-lg-4">
          <a style="font-size: 0.8em;" class="btn btn-primary rounded-pill btn-md text-uppercase js-scroll-trigger color-black">Se Connecter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?= Render::getInstance()->getContent() ?>

<footer class="bg-secondary color-white footer">
  <div class="container">
    <div class="row align-items-center mobile-col-safe font-weight-bold">
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
  ->setHeadStr('<link rel="icon" href="/icon/favicon.jpg" sizes="240x240">')?>