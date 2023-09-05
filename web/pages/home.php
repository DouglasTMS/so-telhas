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


<section class="row our-products">
    <div class="box our-products__box">
        <header class="our-products__box__header">
            <h1>Nossas Telhas</h1>
        </header>

        <main class="our-products__box__main">



            <article class="our-products__box__main__item">
                <img src="<?= thumb()->make("storage/01.jpg", 1200, 800); ?>" title="" alt="">
                <div class="our-products__box__main__item__box">
                    <h1>Telha Forro</h1>
                    <p class="price hide">R$ 89,90</p>
                    <p class="pay-info hide">ou até 12X de R$ 7,49</p>
                    <a href="<?= url("produtos/telha-forro"); ?>" title="Telha Forro">Saiba Mais</a>
                </div>
            </article>

            <article class="our-products__box__main__item">
                <img src="<?= thumb()->make("storage/02.jpg", 1200, 800); ?>" title="" alt="">
                <div class="our-products__box__main__item__box">
                    <h1>Telha Semi-Sanduiche</h1>
                    <p class="price hide">R$ 89,90</p>
                    <p class="pay-info hide">ou até 12X de R$ 7,49</p>
                    <a href="<?= url("produtos/telha-semi-sanduiche"); ?>" title="Telha Semi-sanduiche">Saiba Mais</a>
                </div>
            </article>

            <article class="our-products__box__main__item">
                <img src="<?= thumb()->make("storage/03.jpg", 1200, 800); ?>" title="" alt="">
                <div class="our-products__box__main__item__box">
                    <h1>Telha Sanduiche</h1>
                    <p class="price hide">R$ 89,90</p>
                    <p class="pay-info hide">ou até 12X de R$ 7,49</p>
                    <a href="<?= url("produtos/telha-sanduiche"); ?>" title="Telha Sanduiche">Saiba Mais</a>
                </div>
            </article>



        </main>

        <footer class="our-products__box__footer">
            <a href="" title="">Ver Todas</a>
        </footer>
    </div>
</section>

<section class="row lead">
    <div class="box lead__box">
        <h1>Solicite um Orçamento sem Comprimisso</h1>

        <form action="<?= url("ajax"); ?>" method="POST">
            <label>
                <input type="text" autocomplete="off" name="name" placeholder="Qual seu nome?">
            </label>

            <label>
                <input type="text" autocomplete="off" name="phone" placeholder="Qual seu telefone?">
            </label>

            <label>
                <input type="text" autocomplete="off" name="email" placeholder="Qual seu e-mail?">
            </label>

            <input type="submit" name="send" value="Solicitar Orçamento">
        </form>
    </div>
</section>

<section class="row about-us">
    <div class="box about-us__box">

        <header class="about-us__box__header">
            <h1>Conheça mais sobre a Só Telhas</h1>
        </header>

        <main class="about-us__box__main">
            <div class="about-us__box__main__left">
                <p>A Gigafer é uma empresa do ramo siderúrgico que trabalha desde 2018 com a fabricação própria de telhas metálicas, termoacústica, com manta térmica e com PVC.</p>
                <p>A empresa conta com um trabalho sério, transparente e com foco em garantir sempre o melhor custo-benefício, agilidade e qualidade em nossos produtos, para que clientes e parceiros tenham, sempre, os melhores resultados.</p>
            </div>

            <div class="about-us__box__main__right">
                <img src="<?= url("web/assets/img/telhas-1.jpg"); ?>" title="" alt="">
            </div>
        </main>


    </div>
</section>

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

<section class="row newsletter">
    <div class="box newsletter__box">

        <header class="newsletter__box__header">
            <img width="60px" height="60px" src="<?= url("web/assets/img/icon/gift.svg"); ?>" alt="Newsletter" title="Newsletter">
            <h1>Gostaria de receber nossas novidades e promoções?</h1>
            <p>Cadastre seu e-mail em nossa newsletter e fique por dentro das novidades e promoções.</p>
        </header>

        <footer class="newsletter__box__footer">
            <form action="<?= url("ajax"); ?>" method="POST" name="newsletter">
                <label>
                    <input type="text" autocomplete="off" name="email" placeholder="Qual seu e-mail?">
                </label>

                <label>
                    <input type="text" autocomplete="off" name="first_name" placeholder="Qual seu primeiro nome?">
                    <input type="submit" name="register" value="Cadastrar">
                </label>
            </form>
        </footer>
    </div>
</section>

<section class="row feedback">
    <div class="feedback__box box">
        <header class="feedback__box__header">
            <h1>O que dizem da Só Telhas</h1>
        </header>

        <main class="feedback__box__main">
            <div class="feedback__container">
                <article class="feedback__item">
                    <img src="<?= thumb()->make("storage/slider-01.png", 300, 300); ?>" alt="" title="">
                    <h1>Douglas Siebert</h1>
                    <p>Muito bom!</p>
                </article>
            </div>
        </main>

        <ul class="feedback__controls">
            <li class="prev"><?php include CONF_VIEW_PATH . "/assets/img/icon/arrow.svg"; ?></li>
            <li class="next"><?php include CONF_VIEW_PATH . "/assets/img/icon/arrow.svg"; ?></li>
        </ul>
    </div>
</section>

<section class="row contact">
    <div class="box contact__box">
        <header class="contact__box__header">
            <img src="<?= url("web/assets/img/icon/gift.svg"); ?>" alt="Contato" title="Contato">
            <h1>Entre em Contato Conosco</h1>
            <p>Tire suas dúvidas e faça um orçamento entrando em contato:</p>
        </header>

        <main class="contact__box__main">
            <p>Ligue agora</p>
            <a class="contact__box__main__phone" href="tel:062981752910" title="Ligue para a Só Telhas" target="_blank">62 <b>98175-2910</b></a>
            <a class="contact__box__main__whatsapp" href="https://api.whatsapp.com/send/?phone=5562981752910&text=Olá, Luiz Kelwer! Eu estava no seu site e gostaria de tirar algumas dúvidas." title="Fale com a Só Telhas" target="_blank">62 <b>98175-2910</b></a>
        </main>
    </div>
</section>