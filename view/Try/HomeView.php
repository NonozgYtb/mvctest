<?= \App\Render::getInstance()->setTemplate("test") ?>

<!-- Header -->
<header class="masthead">
  <div class="container-fluid m-0" style="max-width: unset !important;">
    <div class="intro-text">
      <div class="intro-lead-in">BunkerFinal</div>
      <div class="intro-heading text-uppercase">UN SERVEUR EN DEV</div>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" download="blink.txt" href="#">Luncher</a>
      <link rel="icon" type="image/png" href="img/logos/logo Dev'&'Cie.png">
    </div>
  </div>
</header>

<!-- Trailer -->
<section class="bg-gray-300 page-section py-5" id="services">
  <div class="container max-w0 m-0">
    <div class="row max-w0 m-0">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Trailer</h2>
        <h3 class="section-subheading text-muted mb-5">Découvrez en avant-première le serveur BunkerFinal.</h3>
      </div>
    </div>
    <div class="row max-w0 m-0">
      <iframe class="mx-auto"  width="854" height="480" src="https://www.youtube.com/embed/TFPtxvSB8XQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
    </div>
  </div>
</section>

<!-- Services -->
<section class="bg-secondary color-white page-section py-5" id="services">
  <div class="container">
    <div class="row m-0">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Lorem ipsum here!</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod perspiciatis totam aperiam esse reprehenderit aliquid, neque itaque voluptas id blanditiis deserunt delectus at cum sunt harum eligendi iste labore vero!</h3>
      </div>
    </div>
    <div class="row m-0 text-center">
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-server fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Consectetur adipisicing elit</h4>
        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis provident voluptates impedit?</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Consectetur adipisicing elit</h4>
        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis provident voluptates impedit?</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Consectetur adipisicing elit</h4>
        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis provident voluptates impedit?</p>
      </div>
    </div>
  </div>
</section>

<!-- Carousel -->
<div id="homeCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#homeCarousel" data-slide-to="1"></li>
    <li data-target="#homeCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block" src="https://i.pinimg.com/originals/fe/fb/32/fefb324f0f3be423595e19d1736930d6.jpg" alt="Slide 1">
      <div class="carousel-caption d-md-block">
        <h5>11</h5>
        <p class="text-gray-500">a</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block" src="https://i.imgur.com/Cu8Cu.jpg" alt="Slide 2">
      <div class="carousel-caption d-md-block">
        <h5>2</h5>
        <p class="text-gray-500">b</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block" style="filter: brightness(0.65);" src="https://i.imgur.com/u3OEr.png" alt="Slide 3">
      <div class="carousel-caption d-md-block">
        <h5 class="text-white">3</h5>
        <p class="text-gray-500">c</p>
      </div>
    </div>
  </div>
  <hr class="carousel-progress-bar"/>
  <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Contact -->
<section class="page-section py-5" id="contact">
  <div class="container">
    <div class="row m-0">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Contactez-nous</h2><br>

      </div>
    </div>
    <div class="row m-0">
      <div class="col-lg-12">
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
          <div class="row m-0">
            <div class="col-md-6">
              <div class="form-group">
                <input class="form-control" id="name" type="text" placeholder="Votre pscedo *" required="required" data-validation-required-message="Votre pscedo est manquant">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" id="email" type="email" placeholder="Votre mail *" required="required" data-validation-required-message="Veuillez mettre votre email pour vous recontactez">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" id="phone" type="tel" placeholder="Votre numéro" required="required" data-validation-required-message="C'est pas obliger mais c'est cool de l'avoir">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Mais merde, mettez un putain de message ! On vous a apris la politesse ?"></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center mt-4">
              <div id="success"></div>
              <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer à BunkerFinal</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>