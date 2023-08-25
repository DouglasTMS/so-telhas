<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?= CONF_SITE_DESCRIPTION ?>">
    <meta name="home_path" content="<?= url(); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url('web/assets/css/style.css'); ?>">
    <link rel="shortcut icon" href="<?= url("web/assets/img/faveicon.png"); ?>">
    <title><?= CONF_SITE_TITLE ?></title>
</head>

<body>

    <header class="row header">
        <div class="header__box box">
            <a class="header__box__logo" href="<?= url(); ?>" title="<?= CONF_SITE_TITLE ?>">
                <img src="<?= url("web/assets/img/logo-so-telhas.svg"); ?>" alt="<?= CONF_SITE_TITLE ?>" title="<?= CONF_SITE_TITLE ?>">
            </a>

            <a target="_blank" class="header__box__whatsapp" href="wa.me/5565999994919" title="Só Telhas no WhatsApp"></a>
        </div>
    </header>

    <div class="row menu">

        <ul class="menu__box box">
            <li>
                <a href="<?= url(); ?>" title="Início">Início</a>
            </li>

            <li>
                <a href="<?= url("nossas-telhas"); ?>" title="Nossas Telhas">Nossas Telhas</a>
            </li>

            <li>
                <a href="<?= url("quem-somos"); ?>" title="Quem Somos">Quem Somos</a>
            </li>

            <li>
                <a href="<?= url("orcamento"); ?>" title="Orçamento">Orçamento</a>
            </li>
        </ul>
    </div>

    <div class="row slider">
        <div class="slider__box">
            <div class="slider__box__item">
                <h1>Só Telhas</h1>
                <p>Cobrindo o Brasil com Aço</p>
                <img src="" title="" alt="">
            </div>

            <div class="slider__controls">
                <span></span>
                <span class="active"></span>
                <span></span>
            </div>

        </div>
    </div>


    <?= $v->section("content"); ?>


    <footer class="row footer">
        <div class="box footer__box">
            <header class="footer__box__header">
                <img src="<?= url("web/assets/img/logo-so-telhas-white.svg"); ?>" title="<?= CONF_SITE_TITLE ?>" alt="<?= CONF_SITE_TITLE ?>">
            </header>

            <footer class="footer__box__footer">

                <ul class="footer__box__footer__contact">
                    <p>Contato</p>
                    <li>
                        <a href="" target="_blank" title="">65 99999-9999</a>
                    </li>

                    <li>
                        <a href="" target="_blank" title="">65 99999-9999</a>
                    </li>

                    <li>
                        <a href="" target="_blank" title="">oi@sotelhasmt.com</a>
                    </li>
                </ul>

                <ul class="footer__box__footer__social">
                    <p>Redes Sociais</p>
                    <li>
                        <a href="" target="_blank" title="">Instagram</a>
                    </li>

                    <li>
                        <a href="" target="_blank" title="">Facebook</a>
                    </li>
                </ul>

                <ul class="footer__box__footer__payment-types">
                    <p>Formas de Pagamento</p>
                    <li>
                        <a href="" target="_blank" title=""><img src="" title="" alt=""></a>
                    </li>

                    <li>
                        <a href="" target="_blank" title=""><img src="" title="" alt=""></a>
                    </li>

                    <li>
                        <a href="" target="_blank" title=""><img src="" title="" alt=""></a>
                    </li>

                    <li>
                        <a href="" target="_blank" title=""><img src="" title="" alt=""></a>
                    </li>

                    <li>
                        <a href="" target="_blank" title=""><img src="" title="" alt=""></a>
                    </li>

                    <li>
                        <a href="" target="_blank" title=""><img src="" title="" alt=""></a>
                    </li>

                    <li>
                        <a href="" target="_blank" title=""><img src="" title="" alt=""></a>
                    </li>

                    <li>
                        <a href="" target="_blank" title=""><img src="" title="" alt=""></a>
                    </li>
                </ul>

            </footer>
        </div>
    </footer>


    <a target="_blank" href="https://api.whatsapp.com/send/?phone=5565996823535&text=Olá! Eu estava no seu site e gostaria de tirar algumas dúvidas." title="Falar com Consultor" class="whatsapp-fixed"><img width="50px" height="50px" src="<?= url("web/assets/icon/whatsapp-fixed.svg"); ?>" alt="Falar com Consultor">
        <p>Falar com Consultor</p>
    </a>

    <div class="load"></div>
    <div class="alpha"></div>
    <div class="message"></div>
    <script src="<?= url("web/assets/js/scripts.js"); ?>"></script>
</body>

</html>