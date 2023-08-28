<?php $v->layout("index"); ?>

<section class="row our-products">
    <div class="box our-products__box">
        <header class="our-products__box__header">
            <h1>Nossas Telhas</h1>
        </header>

        <main class="our-products__box__main">

            <?php for ($i = 1; $i <= 4; $i++) : ?>

                <article class="our-products__box__main__item">
                    <img src="<?= thumb()->make("storage/slider-01.png", 300, 200); ?>" title="" alt="">
                    <div class="our-products__box__main__item__box">
                        <h1>Telhas Semi Sanduíche</h1>
                        <p class="price">R$ 89,90</p>
                        <p class="pay-info">ou até 12X de R$ 7,49</p>
                        <a href="" title="">Saiba Mais</a>
                    </div>
                </article>

            <?php endfor; ?>

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

        <main class="our-differentials__box__main">
            <article class="our-differentials__box__main__item">
                <img src="" title="" alt="">
                <h1>Temos o melhor preço do mercado!</h1>
            </article>

            <article class="our-differentials__box__main__item">
                <img src="" title="" alt="">
                <h1>Entregamos para GO, MT, MG e DF!</h1>
            </article>

            <article class="our-differentials__box__main__item">
                <img src="" title="" alt="">
                <h1>Segurança!</h1>
            </article>

            <article class="our-differentials__box__main__item">
                <img src="" title="" alt="">
                <h1>Estilo!</h1>
            </article>

            <article class="our-differentials__box__main__item">
                <img src="" title="" alt="">
                <h1>Durabilidade!</h1>
            </article>
        </main>
    </div>
</section>

<section class="row newsletter">
    <div class="box newsletter__box">
        <header class="newsletter__box__header">
            <img src="" alt="" title="">
            <h1>Gostaria de receber nossas novidades e promoções?</h1>
            <p></p>
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
                    <img src="" alt="" title="">
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
            <img src="" alt="" title="">
            <h1>Entre em Contato Conosco</h1>
            <p>Tire suas dúvidas e faça um orçamento entrando em contato:</p>
        </header>

        <main class="contact__box__main">
            <p>Ligue agora</p>
            <a class="contact__box__main__phone" href="tel:062981752910" title="Ligue para a Só Telhas" target="_blank">62 <b>98175-2910</b></a>
            <a class="contact__box__main__whatsapp" href="wa.me/5562981752910" title="Fale com a Só Telhas" target="_blank">62 98175-2910</a>
        </main>

        <footer class="contact__box__footer">
            <a href="" title=""></a>
        </footer>
    </div>
</section>