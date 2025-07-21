<?php $this->layout("index"); ?>


<div class="row slider">

    <div class="slider__box style='width: 100%'">

        <div class="slider__box__item style='width: 33.333%'">

            <picture alt="">
                <source srcset="<?= thumb()->make("web/assets/img/slider-01-desktop.jpg", 1920, 600) ?>" media="(min-width: 1024px)">
                <source srcset="<?= thumb()->make("web/assets/img/slider-01-desktop.jpg", 1920, 600) ?>" media="(min-width: 500px)">
                <img src="<?= thumb()->make("web/assets/img/slider-01-mobile.jpg", 1200, 1000) ?>" alt="Só Telhas - Cobrindo o Brasil com Aço">
            </picture>

        </div>

        <div class="slider__box__item style='width: 33.333%'">

            <picture alt="">
                <source srcset="<?= thumb()->make("web/assets/img/slider-02-desktop.jpg", 1920, 600) ?>" media="(min-width: 1024px)">
                <source srcset="<?= thumb()->make("web/assets/img/slider-02-desktop.jpg", 1920, 600) ?>" media="(min-width: 500px)">
                <img src="<?= thumb()->make("web/assets/img/slider-02-mobile.jpg", 1200, 1000) ?>" alt="Só Telhas - Cobrindo o Brasil com Aço">
            </picture>

        </div>

        <div class="slider__box__item style='width: 33.333%'">

            <picture alt="">
                <source srcset="<?= thumb()->make("web/assets/img/slider-03-desktop.jpg", 1920, 600) ?>" media="(min-width: 1024px)">
                <source srcset="<?= thumb()->make("web/assets/img/slider-03-desktop.jpg", 1920, 600) ?>" media="(min-width: 500px)">
                <img src="<?= thumb()->make("web/assets/img/slider-03-mobile.jpg", 1200, 1000) ?>" alt="Só Telhas - Cobrindo o Brasil com Aço">
            </picture>

        </div>

    </div>

    <div class="slider__controls">
        <span class="active 1"></span>
        <span class="2"></span>
        <span class="3"></span>
    </div>

</div>

<?= $this->insert('inc/products'); ?>
<?= $this->insert('inc/call-to-action'); ?>
<?= $this->insert('inc/about-us'); ?>
<?= $this->insert('inc/our-differentials'); ?>
<?= $this->insert('inc/newsletter'); ?>
<?= $this->insert('inc/feedback'); ?>
<?= $this->insert('inc/contact'); ?>