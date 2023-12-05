<?php $v->layout("index"); ?>
<div class="row slider">
    <div class="slider__box style= width: 100%">
        <div class="slider__box__item style= width: 100%">

            <div class="slider__box__item__box">
                <h1>Só Telhas</h1>
                <p>Cobrindo o Brasil com Aço</p>
            </div>

            <picture alt="">
                <source srcset="<?= thumb()->make("web/assets/img/slider-01.jpg", 1920, 600) ?>" media="(min-width: 1024px)">
                <source srcset="<?= thumb()->make("web/assets/img/slider-01.jpg", 1920, 900) ?>" media="(min-width: 768px)">
                <source srcset="<?= thumb()->make("web/assets/img/slider-01.jpg", 1200, 1000) ?>" media="(min-width: 510px)">
                <img src="<?= thumb()->make("web/assets/img/slider-01.jpg", 1200, 1350) ?>" alt="">
            </picture>

        </div>

        <div class="slider__controls">
            <span></span>
            <span class="active"></span>
            <span></span>
        </div>

    </div>
</div>

<?= $v->insert('inc/products'); ?>

<?= $v->insert('inc/lead-form'); ?>

<?= $v->insert('inc/about-us'); ?>

<section class="row our-differentials">
    <div class="box our-differentials__box">
        <header class="our-differentials__box__header">
            <h1>Nossos Diferencias</h1>
        </header>

        <div class="our-differentials__box__scroll-box">

            <main class="our-differentials__box__scroll-box__main">

                <article class="our-differentials__box__scroll-box__main__item">
                    <img src="<?= url("web/assets/img/icon/price.svg"); ?>" title="Temos o melhor preço do mercado" alt="Temos o melhor preço do mercado">
                    <h1>Temos o melhor preço do mercado!</h1>
                </article>

                <article class="our-differentials__box__scroll-box__main__item">
                    <img src="<?= url("web/assets/img/icon/truck.svg"); ?>" title="Entregamos para GO, MT, MG e DF" alt="Entregamos para GO, MT, MG e DF">
                    <h1>Entregamos para GO, MT, MG e DF!</h1>
                </article>

                <article class="our-differentials__box__scroll-box__main__item">
                    <img src="<?= url("web/assets/img/icon/safety.svg"); ?>" title="Segurança" alt="Segurança">
                    <h1>Segurança!</h1>
                </article>

                <article class="our-differentials__box__scroll-box__main__item">
                    <img src="<?= url("web/assets/img/icon/style.svg"); ?>" title="Estilo" alt="Estilo">
                    <h1>Estilo!</h1>
                </article>

                <article class="our-differentials__box__scroll-box__main__item">
                    <img src="<?= url("web/assets/img/icon/structure.svg"); ?>" title="Durabilidade" alt="Durabilidade">
                    <h1>Durabilidade!</h1>
                </article>
            </main>

        </div>
    </div>
</section>

<?= $v->insert('inc/newsletter'); ?>

<?= $v->insert('inc/feedback'); ?>

<section class="row contact">
    <div class="box contact__box">
        <header class="contact__box__header">
            <img src="<?= url("web/assets/img/icon/gift.svg"); ?>" alt="Contato" title="Contato">
            <h1>Entre em Contato Conosco</h1>
            <p>Tire suas dúvidas e faça um orçamento entrando em contato:</p>
        </header>

        <main class="contact__box__main">
            <p>Ligue agora</p>
            <a class="contact__box__main__phone" href="tel:06298114-8564" title="Ligue para a Só Telhas" target="_blank">62 <b>98114-8564</b></a>
            <a class="contact__box__main__whatsapp" href="https://api.whatsapp.com/send/?phone=5562981148564&text=Olá, Hihasmin! Eu estava no seu site e gostaria de tirar algumas dúvidas." title="Fale com a Só Telhas" target="_blank">62 <b>98114-8564</b></a>
        </main>
    </div>
</section>