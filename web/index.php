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

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JQQ8P8DF67"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-JQQ8P8DF67');
    </script>

</head>

<body>

    <header class="row header">
        <div class="header__box box">
            <a class="header__box__logo" href="<?= url(); ?>" title="<?= CONF_SITE_TITLE ?>">
                <img src="<?= url("web/assets/img/logo-so-telhas.svg"); ?>" alt="<?= CONF_SITE_TITLE ?>" title="<?= CONF_SITE_TITLE ?>">
            </a>

            <a target="_blank" class="header__box__whatsapp" data-icon-uri="<?= url("web/assets/img/icon"); ?>" href="#" title="Só Telhas no WhatsApp"><i></i><span>Peça um Orçamento</span></a>
        </div>
    </header>

    <div class="row menu">

        <ul class="menu__box box">

            <li>
                <a href="<?= url(); ?>" title="Início">Início</a>
            </li>

            <li>
                <a href="<?= url("telhas"); ?>" title="Nossas Telhas">Nossas Telhas</a>
            </li>

            <li>
                <a href="<?= url("quem-somos"); ?>" title="Quem Somos">Quem Somos</a>
            </li>

            <li>
                <a href="<?= url("orcamento"); ?>" title="Orçamento">Orçamento</a>
            </li>
        </ul>

        <div class="menu__mobile-icon">
            <div class="menu__mobile-icon__box">
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
                        <img width="20" height="20.1" src="<?= url("web/assets/img/icon/whatsapp.svg"); ?>" title="WhatsApp" alt="WhatsApp">
                        <a href="https://api.whatsapp.com/send/?phone=5562981752910&text=Olá, Luiz Kelwer! Eu estava no seu site e gostaria de tirar algumas dúvidas." target="_blank" title="Falar com a Só Telhas">(62) 98175-2910</a>
                    </li>

                    <li>
                        <img width="20" height="21.82" src="<?= url("web/assets/img/icon/phone.svg"); ?>" title="Telefone" alt="Telefone">
                        <a href="tel:062981752910" target="_blank" title="Ligar para a Só Telhas">(62) 98175-2910</a>
                    </li>

                    <li>
                        <img width="20" height="15" src="<?= url("web/assets/img/icon/email.svg"); ?>" title="E-mail" alt="E-mail">
                        <a href="mailto:comercial@sotelhasmt.com" target="_blank" title="Enviar e-mail para a Só Telhas">comercial@sotelhasmt.com</a>
                    </li>
                </ul>

                <ul class="footer__box__footer__social">
                    <p>Redes Sociais</p>
                    <li>
                        <img width="20" height="20" src="<?= url("web/assets/img/icon/instagram.svg"); ?>" title="Instagram" alt="Instagram">
                        <a href="https://www.instagram.com/sotelhasmt" target="_blank" title="Instagram da Só Telhas">Instagram</a>
                    </li>

                    <li>
                        <img width="20" height="20" src="<?= url("web/assets/img/icon/facebook.svg"); ?>" title="Facebook" alt="Facebook">
                        <a href="https://www.facebook.com/sotelhasmt" target="_blank" title="Facebook da Só Telhas">Facebook</a>
                    </li>
                </ul>

                <ul class="footer__box__footer__payment-types">
                    <p>Formas de Pagamento</p>
                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/visa.svg"); ?>" title="Visa" alt="Visa">
                    </li>

                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/mastercard.svg"); ?>" title="Mastercard" alt="Mastercard">
                    </li>

                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/visa.svg"); ?>" title="Visa" alt="Visa">
                    </li>

                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/mastercard.svg"); ?>" title="Mastercard" alt="Mastercard">
                    </li>

                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/visa.svg"); ?>" title="Visa" alt="Visa">
                    </li>

                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/mastercard.svg"); ?>" title="Mastercard" alt="Mastercard">
                    </li>

                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/visa.svg"); ?>" title="Visa" alt="Visa">
                    </li>

                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/mastercard.svg"); ?>" title="Mastercard" alt="Mastercard">
                    </li>
                </ul>

            </footer>
        </div>
    </footer>

    <div class="whatsapp-fixed">
        <a target="_blank" data-icon-uri="<?= url("web/assets/img/icon"); ?>" href="#" title="Falar com Consultor" class="whatsapp-fixed__open-list">
            <img width="50px" height="50px" src="<?= url("web/assets/img/icon/whatsapp-fixed.svg"); ?>" alt="Falar com Consultor">
            <p>Falar com Consultor</p>
        </a>

        <ul class="whatsapp-fixed__list-box">
            <div class="whatsapp-fixed__list-box__header">
                <img src="<?= url("web/assets/img/icon/whatsapp.svg"); ?>" title="WhatsApp" alt="WhatsApp">
                <p>Com qual consultor gostaria de falar?</p>
            </div>

            <li class="whatsapp-fixed__list-box__item">
                <a href="https://api.whatsapp.com/send/?phone=5562981752910&text=Olá, Luiz Kelwer! Eu estava no seu site e gostaria de tirar algumas dúvidas." title="Falar com Luiz Kelwer" target="_blank" class="whatsapp-fixed__list-box__item__name">
                    Luiz Kelwer
                </a>

                <a href="https://api.whatsapp.com/send/?phone=5562981752910&text=Olá, Luiz Kelwer! Eu estava no seu site e gostaria de tirar algumas dúvidas." title="Falar com Luiz Kelwer" target="_blank" class="whatsapp-fixed__list-box__item__phone">
                    (62) 98175-2910
                </a>
            </li>

            <li class="whatsapp-fixed__list-box__item">
                <a href="https://api.whatsapp.com/send/?phone=5562981148564&text=Olá, Hihasmin! Eu estava no seu site e gostaria de tirar algumas dúvidas." title="Falar com Hihasmin" target="_blank" class="whatsapp-fixed__list-box__item__name">
                    Hihasmin
                </a>

                <a href="https://api.whatsapp.com/send/?phone=5562981148564&text=Olá, Hihasmin! Eu estava no seu site e gostaria de tirar algumas dúvidas." title="Falar com Hihasmin" target="_blank" class="whatsapp-fixed__list-box__item__phone">
                    (62) 98114-8604
                </a>
            </li>

            <li class="whatsapp-fixed__list-box__item">
                <a href="https://api.whatsapp.com/send/?phone=5562981148564&text=Olá, Gessika! Eu estava no seu site e gostaria de tirar algumas dúvidas." title="Falar com Gessika" target="_blank" class="whatsapp-fixed__list-box__item__name">
                    Gessika
                </a>

                <a href="https://api.whatsapp.com/send/?phone=5562981148564&text=Olá, Gessika! Eu estava no seu site e gostaria de tirar algumas dúvidas." title="Falar com Gessika" target="_blank" class="whatsapp-fixed__list-box__item__phone">
                    (62) 98114-8564
                </a>
            </li>

        </ul>
    </div>

    <div class="load"></div>
    <div class="alpha"></div>
    <div class="message"></div>
    <script src="<?= url("web/assets/js/scripts.js"); ?>"></script>
</body>

</html>