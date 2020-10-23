<?php
\App\Render::getInstance()->setTemplate("test")->setBody(true, "stiky-nav");

$data = [
    "id" => "CC",
    "class" => "mt-5",
    "data" => [
        0 => [
            "img" => "https://i.pinimg.com/originals/fe/fb/32/fefb324f0f3be423595e19d1736930d6.jpg",
            "alt" => "Slide 1",
            "title" => "AaAaAaAaA",
            "subtitle" => "1a1a1",
            "color" => "light"
        ],
        1 => [
            "img" => "https://i.imgur.com/Cu8Cu.jpg",
            "alt" => "Slide 2",
            "title" => "BbBbBbB",
            "subtitle" => "2b2b2",
        ],
        2 => [
            "img" => "https://i.imgur.com/u3OEr.png",
            "alt" => "Slide 3",
            "title" => "CcCcCcC",
            "subtitle" => "3c3c3",
            "color" => "dark"
        ]
    ]
];

$arr = $data["data"]

?>

<div id="carousel-<?= $data["id"] ?>" class="<?= $data["class"] ?> carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-<?= $data["id"] ?>" data-slide-to="0" class="active"></li>
        <?php for ($i = 1; $i < count($arr); $i++) : ?>
            <li data-target="#carousel-<?= $data["id"] ?>" data-slide-to="<?= $i ?>"></li>
        <?php endfor; ?>
    </ol>
    <div class="carousel-inner">
        <?php foreach ($arr as $item) : ?>
            <div class="carousel-item<?= ($item == $arr[0]) ? " active" : "" ?>">
                <img class="d-block" src="<?= $item["img"] ?>" alt="<?= $item["alt"] ?>">
                <div class="carousel-caption d-md-block" id="aa-<?= \App\Utils\Str::customRandStr(5) ?>">
                    <h5 class="color-<?=(!empty($item["color"]) && $item["color"] == "dark") ? "gray-900 font-weight-bold dark" : "white"?>"><?= $item["title"] ?></h5>
                    <p class="text-gray-<?=(!empty($item["color"]) && $item["color"] == "dark") ? "800 font-weight-bold" : "500"?>"><?= $item["subtitle"] ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <hr class="carousel-progress-bar" />
    <a class="carousel-control-prev" href="#carousel-<?= $data["id"] ?>" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-<?= $data["id"] ?>" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<script>
    $("[id^='aa-']").toArray().forEach(element => {
        console.log(element);
    });
</script>