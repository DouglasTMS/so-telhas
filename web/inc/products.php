<section class="row our-products">
    <div class="box our-products__box">
        <header class="our-products__box__header">
            <h1>Nossas Telhas</h1>
        </header>

        <main class="our-products__box__main">

            <?php foreach ($products as $resultProducts) : ?>

                <article class="our-products__box__main__item">
                    <img src="<?= thumb()->make($resultProducts->image, 1200, 800); ?>" title="" alt="">
                    <div class="our-products__box__main__item__box">
                        <h1><?= $resultProducts->name; ?></h1>
                        <p class="price hide">R$ 89,90</p>
                        <p class="pay-info hide">ou até 12X de R$ 7,49</p>
                        <a href="<?= url("telhas"); ?>/<?= $resultProducts->uri; ?>" title="<?= $resultProducts->name; ?>">Saiba Mais</a>
                    </div>
                </article>

            <?php endforeach; ?>

        </main>

        <footer class="our-products__box__footer">
            <a href="<?= url("telhas"); ?>" title="">Ver Todas</a>
        </footer>
    </div>
</section>