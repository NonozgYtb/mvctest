<?= \App\Render::getInstance()->setTemplate("test")->setBody(true, "stiky-nav") ?>

<section class="bg-secondary color-white page-section pt-3 pb-5" id="staff">
    <div class="container">
        <div class="row m-0 justify-content-center">

            <div style="font-size: 2rem" class="col-12 mb-3 text-center spacism">Staff</div>

            <?= \App\Config\StaffCard::staff() ?>
        </div>
    </div>
</section>

<section class="bg-secondary color-white page-section pt-3 pb-5" id="partners">
    <div class="container">
        <div class="row m-0 justify-content-center">

            <div style="font-size: 2rem" class="col-12 mb-3 text-center spacism">Partenaires</div>

            <?= \App\Config\StaffCard::partners() ?>
        </div>
    </div>
</section>