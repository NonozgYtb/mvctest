<?php

namespace App\Config;

use App\Render;

class RenderTemplate
{
    public static function render($body)
    {
        $RenderAPI = Render::getInstance();
        ob_start();

        /*<!--<!DOCTYPE html>
            <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="Content-Type" content="text/html">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?= $RenderAPI->getHead()["title"] ?? "" ?></title>
                <meta name="author" content="<?= $RenderAPI->getHead()["author"] ?? "NonozgYtb" ?>">
                <meta name="language" content="fr">
                <meta http-equiv="Content-Language" content="fr">
                <meta name="description" content="<?= $RenderAPI->getHead()["description"] ?? "" ?>">
                <?= static::getHeadStr() ?>
            </head>
            <body>
                <?= $body ?? "" ?>
                <a><?= $RenderAPI->getBody()["keyys"] ?? "" ?></a>
            </body>
            </html>-->*/ ?>

        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <title><?= $RenderAPI->getHead()["title"] ?? "" ?> - BunkerFinal</title>
            <meta name="description" content="<?= $RenderAPI->getHead()["description"] ?? "" ?>">
            <meta name="author" content="<?= $RenderAPI->getHead()["author"] ?? "NonozgYtb" ?>">
            <meta name="language" content="fr">
            <meta http-equiv="Content-Language" content="fr">
            <link rel="icon" href="/errorfile/errorfavicon.png" sizes="240x240">
            <?= static::getHeadStr() ?>
        </head>

        <body>
            <?= $body ?? "" ?>
        </body>

        </html>
<?php
        $return = ob_get_clean();
        return $return;
    }

    public static function getHeadStr()
    {
        return static::arrToStr(Render::getInstance()->getHeadStr());
    }

    private static function arrToStr($array)
    {
        $str = "";
        foreach ($array as $item) {
            if (gettype($item) == "string") $str .= $item;
            elseif (gettype($item) == ("object" || "array")) $str .= static::arrToStr($item);
        }
        return $str;
    }
}
?>