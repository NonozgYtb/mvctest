<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><span class="fas fa-radiation" style="padding-right: 10px"></span>BunkerFinal</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu <i class="fas fa-bars"></i> </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"> <a class="nav-link js-scroll-trigger active" href="/">Accueil</a> </li>
                <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="/news">News</a> </li>
                <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="/partners">Partenaires</a> </li>
                <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="/history">Histoire</a> </li>
                <li class="nav-item mx-auto mr-lg-0 ml-lg-4"> <a style="font-size: 0.8em;" href="#" class="btn btn-primary rounded-pill btn-md text-uppercase js-scroll-trigger color-black">Se Connecter</a> </li>
            </ul>
        </div>
    </div>
</nav>
<form action="<?= App\Config\Singletons\RouterSingletons::AltoRouter()->generate("logger")?>" class="form-signin" method="POST">
    <h1 class="h3 mb-3 font-weight-normal">
        Connexion
    </h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required="">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required="">
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me">
            Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
</form>

<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .form-signin {
        text-align: center;
        color: white;
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>