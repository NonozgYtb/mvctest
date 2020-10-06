<?php

use App\Render;

Render::getInstance()
    ->setHeadStr('<link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">')
    ->setHeadStr('<link type="text/css" rel="stylesheet" href="/errorfile/style.css" />')
    ->setHeadStr('<link rel="icon" href="/errorfile/errorfavicon.png" sizes="240x240">') ?>
<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>404</h1>
            <h2>Page non trouvé</h2>
        </div>
        <a href="/" class="a-404">Accueil</a>
    </div>
</div>

<?= Render::getInstance()->setTemplate("blank") ?>