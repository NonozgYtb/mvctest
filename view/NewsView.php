<?= \App\Render::getInstance()->setTemplate("test")->setHead("nav-collapse", "bodyC1") ?>

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

<!-- Header -->
<section class="bg-sizer new-header bg-secondary" data-bg-url="/img/bg.jpg">
    <div class="row mx-0">
        <h2 class="color-white col-12 col-md-6 col-lg-5 col-xl-4 text-truncate">Mises à jour</h2>
        <div class="col-12"></div>
        <span class="color-white font-weight-bold col-12 col-md-10 col-lg-9 col-xl-8 text-truncate" style="letter-spacing: 1px;">Les mises à jour de BunkerFinal sont inédites. Nous en préparons bien d'autres.</span>
    </div>
</section>

<section class="bg-secondary color-white page-section py-5" id="news">
    <div class="container">
        <div class="row m-0">
            <div class="col-12 col-md-8 col-xl-9">
                <h2 style="border-bottom: rgba(255, 255, 255, 0.1) 1px solid;">Avancement du serveur</h2>
                <div class="mb-3">Plusieurs parties du serveur sont en développement. Voici l'avancement de ces domaines.</div>
                <div style="background: #1b1f22; padding: 25px 15px; box-shadow: 0 0 9px 0px black; border-radius: 6px;">
                    <div class="pl-2">- Lancement de l'<strong>Alpha</strong> privée effectué depuis le <strong>25 juillet 2020</strong> !</div>
                    <div class="pl-2 mt-2 mb-5">- Changement de <strong>version</strong> du serveur, passage en <strong>1.12.2</strong></div>
                    <?php foreach ($progress as $str => $percent) :
                        echo '<span class="text-center d-block mt-3">' . $str . ' - ' . $percent . '%</span>
                        <div class="bg-gray-800 progress mt-1">
                            <div class="bg-success progress-bar font-weight-bold" role="progressbar" style="width: ' . $percent . '%;" aria-valuenow="' . $percent . '" aria-valuemin="0" aria-valuemax="100">' . $percent . '%</div>
                        </div>';
                    endforeach;
                    ?>
                </div>
            </div>
            <div class="col-12 m-0 pt-3 pt-md-0 col-md-4 col-xl-3">
                <ul class="list-group list-group-flush spearater-white ul-transparent">
                    <div class="spacism">
                        <li class="list-group-item li-header">
                            <span>v1.1.2</span>
                        </li>
                        <li class="list-group-item">
                            <a href="" class="color-white">Texte 1</a>
                        </li>
                        <li class="list-group-item">
                            <a href="" class="color-white">Repudiandae delectus libero</a>
                        </li>
                    </div>
                    <div class="spacism">
                        <li class="list-group-item li-header">
                            <span>v1.1.1</span>
                        </li>
                        <li class="list-group-item">
                            <a href="" class="color-white">nesciunt adipisci illo, iste</a>
                        </li>
                        <li class="list-group-item">
                            <a href="" class="color-white">Lorem ipsum</a>
                        </li>
                    </div>
                    <div>
                        <li class="list-group-item li-header">
                            <span>v0.2.1_beta</span>
                        </li>
                        <li class="list-group-item">
                            <a href="" class="color-white">Adipisicing</a>
                        </li>
                        <li class="list-group-item">
                            <a href="" class="color-white">dolor deserunt</a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>