<?php $this->layout("index"); ?>

<section class="row product-view">
    <div class="box product-view__box">
        <div class="box product-view__box__left">
            <picture alt="<?= $data->name; ?>">
                <source srcset="<?= thumb()->make($data->image, 1200, 800) ?>" media="(min-width: 768px)">
                <source srcset="<?= thumb()->make($data->image, 900, 600) ?>" media="(min-width: 510px)">
                <img src="<?= thumb()->make($data->image, 800, 500) ?>" alt="<?= $data->name; ?>">
            </picture>
        </div>
        <div class="box product-view__box__right">
            <h1><?= $data->name; ?></h1>
            <div class="product-view__box__right__html">
                <?= $data->description; ?>
            </div>
        </div>
    </div>

    <?php if ($variations) : ?>
        <section class="box product-view__variations">
            <h1>Variações da <?= $data->name; ?></h1>

            <?php foreach ($variations as $resultVariations) : ?>

                <article class="product-view__variations__item">
                    <img src="<?= thumb()->make($resultVariations->image, 450, 350); ?>" title="<?= $resultVariations->name; ?>" alt="<?= $resultVariations->name; ?>">
                    <h1><?= $resultVariations->name; ?></h1>
                </article>

            <?php endforeach; ?>



        </section>

    <?php endif; ?>
</section>

<?= $this->insert('inc/call-to-action'); ?>
<?= $this->insert('inc/about-us'); ?>
<?= $this->insert('inc/our-differentials'); ?>
<?= $this->insert('inc/newsletter'); ?>
<?= $this->insert('inc/feedback'); ?>
<?= $this->insert('inc/contact'); ?>