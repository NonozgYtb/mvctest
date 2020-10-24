<?= \App\Render::getInstance()->setTemplate("test")->setBody(true, "no-footer") ?>
<div class="backgrounder" data-bg-hider="true" data-bg-url="http://thepatternlibrary.com/img/au.jpg" style="
    filter: brightness(0.12);
"></div>
<form action="<?= App\Config\Singletons\RouterSingletons::AltoRouter()->generate("logger")?>" class="form-signin" method="POST">
    <h1 class="h3 mb-3 font-weight-normal">
        Connexion
    </h1>
    <label for="mail" class="sr-only">Email address</label>
    <input type="email" name="mail" id="mail" class="form-control" placeholder="Email address" required="">
    <label for="pswd" class="sr-only">Password</label>
    <input type="password" name="pswd" id="pswd" class="form-control" placeholder="Password" required="">
    <div class="checkbox mb-3">
        <label class="m-0">
            <input type="checkbox" name="remember-me" value="true">
            Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <a id="return-back" class="d-inline-block mt-2 text-muted">Retour sur la dernière page</a>
</form>

<script>
  $("#return-back")[0].href = document.referrer;
</script>

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