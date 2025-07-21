<section class="row our-products">
    <div class="box our-products__box">
        <header class="our-products__box__header">

            <?= (!empty($titleType) ? "<h1>Alguns de Nossos Produtos</h1>" : ($products[0]->type == 1 ? "<h1>Telhas Isotérmicas</h1>" : ($products[0]->type == 3 ? "<h1>Isopainel</h1>" : "<h1>Perfis</h1>"))); ?>

        </header>

        <main class="our-products__box__main">

            <?php foreach ($products as $resultProducts) : ?>

                <article class="our-products__box__main__item">
                    <img src="<?= thumb()->make($resultProducts->image, 600, 400); ?>" width="600" height="auto" title="<?= $resultProducts->name; ?>" alt="<?= $resultProducts->name; ?>">
                    <div class="our-products__box__main__item__box">
                        <h1><?= $resultProducts->name; ?></h1>
                        <p class="price hide">R$ 89,90</p>
                        <p class="pay-info hide">ou até 12X de R$ 7,49</p>
                        <a href="<?= url("telhas"); ?>/<?= $resultProducts->uri; ?>" title="<?= $resultProducts->name; ?>">Saiba Mais</a>
                    </div>
                </article>

            <?php endforeach; ?>

        </main>

        <!--
        <footer class="our-products__box__footer">
            <a href="<?= url("telhas"); ?>" title="Conheça todas nossas Telhas">Ver Todas</a>
        </footer>
            -->
    </div>
</section>