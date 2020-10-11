<?= \App\Render::getInstance()->setTemplate("test")->setBody(true, "stiky-nav")?>

<?php
$progress = [
    'Terraforming bêta rivières' => 100,
    'Terraforming bêta forme générale et placement d\'arbres' => 100,
    'Migration du mod des terminaux vers la version 1.12.2' => 100,
    'Développement du "RoadSystem"' => 100,
    'Terraforming bêta route' => 15,
    'Terraforming bêta buissons, rochers et divers' => 10
]
?>

<!-- Services -->
<section class="bg-secondary color-white page-section pt-3 pb-5" id="services">
    <div class="container">
        <div class="row m-0 justify-content-center">

            <div style="font-size: 2rem" class="font-italic col-12 mb-3 text-center">Partenaires :</div>

            <?=\App\Config\PartnersCard::data()?>
        </div>
    </div>
</section>