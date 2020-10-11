<?php

namespace App\Config;

class PartnersCard
{

    private static function dater()
    {

        return '[{
            "link": "https://www.youtube.com/channel/UCC6uPFAPBRa68lBQ4SLSkxQ",
            "name": "Hellioz et AlkaXD",
            "service": "youtube",
            "img": "/img/partners/logohellioz.jpg"
        },
          {
            "link": "https://www.youtube.com/channel/UCgUi1xlqAPSa9Ax4NHKQTUQ",
            "name": "Le Burger Vegan",
            "service": "youtube",
            "img": "/img/partners/logolbv.jpg"
        },
          {
            "link": "https://www.youtube.com/channel/UCix46Fk6uKmUkI2_bAaHkZw",
            "name": "\'_YellowJohn_\'",
            "service": "youtube",
            "img": "/img/partners/logoyellow.jpg"
        },
          {
            "link": "https://www.youtube.com/channel/UCViADyAcFOVV5jxHB3Yi0JA",
            "name": "Gundred4",
            "service": "youtube",
            "img": "/img/partners/logogundred.jpg"
        },
        {
            "link": "https://www.youtube.com/channel/UCCg8EWm2563cjs_yNgqU_xA",
            "name": "Zeyknew",
            "service": "youtube",
            "img": "/img/partners/logozeyknew.jpg"
        },
        {
            "link": "https://www.youtube.com/user/ZakiLebo",
            "name": "Zaki Production",
            "service": "youtube",
            "img": "/img/partners/logozaki.jpg"
        },
        {
            "link": "https://www.youtube.com/channel/UCug6RKjCY0zOygWAuYBmbEQ",
            "name": "Bright \'n\' Dark",
            "service": "youtube",
            "img": "/img/partners/logofalcon.jpg"
        },
        {
            "link": "https://www.youtube.com/channel/UCag91zxpL0Lt2LBtRNhU4ew",
            "name": "HunterZ Cinematic Universe",
            "service": "youtube",
            "img": "/img/partners/hcu.png"
        },
        {
            "link": "https://discord.gg/uMfbahv",
            "name": "Le Grimoire à Méta",
            "service": "discord",
            "img": "/img/partners/logogrimoire.jpg"
        }]';
    }

    public static function data()
    {
        ob_start();
        foreach (json_decode(static::dater()) as $item) :
            $item = (array)$item;
?>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 px-0 px-md-2 px-2 px-md-2 pb-2 pt-2">
                <div class="card h-100">
                    <a href="<?= $item["link"] ?>" title="<?= $item["name"] ?>" target="_blank">
                        <img class="card-img-top" src="<?= $item["img"] ?>" alt="<?= $item["name"] ?>">
                    </a>
                    <div class="card-body text-center">
                        <div style="margin-bottom: 46px">
                            <h5 class="card-title"><?= $item["name"] ?></h5>
                        </div>
                        <div class="carder-button">
                            <a href="<?= $item["link"] ?>" class="btn btn-<?= ($item["service"] == "discord") ? "discord" : "red" ?>"><?= ($item["service"] == "discord") ? "Discord" : "Youtube" ?></a>
                        </div>
                    </div>
                </div>
            </div>
<?php
        endforeach;
        return ob_get_clean();
    }
}
?>