<?php $this->layout("index"); ?>
<div class="row slider">
    <div class="slider__box style= width: 100%">
        <div class="slider__box__item style= width: 100%">

            <picture alt="">
                <source srcset="<?= thumb()->make("web/assets/img/slider-01-desktop.jpg", 1920, 600) ?>" media="(min-width: 1024px)">
                <source srcset="<?= thumb()->make("web/assets/img/slider-01-desktop.jpg", 1920, 600) ?>" media="(min-width: 500px)">
                <img src="<?= thumb()->make("web/assets/img/slider-01-mobile.jpg", 1200, 1000) ?>" alt="Só Telhas - Cobrindo o Brasil com Aço">
            </picture>

        </div>

        <div class="slider__controls">
            <span></span>
            <span class="active"></span>
            <span></span>
        </div>

    </div>
</div>

<?= $this->insert('inc/products'); ?>
<?= $this->insert('inc/lead-form'); ?>
<?= $this->insert('inc/about-us'); ?>
<?= $this->insert('inc/our-differentials'); ?>
<?= $this->insert('inc/newsletter'); ?>
<?= $this->insert('inc/feedback'); ?>
<?= $this->insert('inc/contact'); ?>