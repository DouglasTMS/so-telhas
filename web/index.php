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

    <?= $header; ?>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NXPNP97F');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXPNP97F" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1007874986972763');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1007874986972763&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

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
                    <li class="footer__box__footer__contact__title">
                        <p>Contato</p>
                    </li>
                    <li>
                        <img width="20" height="20.1" src="<?= url("web/assets/img/icon/whatsapp.svg"); ?>" title="WhatsApp" alt="WhatsApp">
                        <a href="https://api.whatsapp.com/send/?phone=5562981148564&text=Olá, Hihasmin! Eu estava no seu site e gostaria de tirar algumas dúvidas." target="_blank" title="Falar com a Só Telhas">(62) 98114-8564</a>
                    </li>

                    <li>
                        <img width="20" height="21.82" src="<?= url("web/assets/img/icon/phone.svg"); ?>" title="Telefone" alt="Telefone">
                        <a href="tel:062981148564" target="_blank" title="Ligar para a Só Telhas">(62) 98114-8564</a>
                    </li>

                    <li>
                        <img width="20" height="15" src="<?= url("web/assets/img/icon/email.svg"); ?>" title="E-mail" alt="E-mail">
                        <a href="mailto:comercial@sotelhasmt.com" target="_blank" title="Enviar e-mail para a Só Telhas">comercial@sotelhasmt.com</a>
                    </li>
                </ul>

                <ul class="footer__box__footer__social">
                    <li class="footer__box__footer__contact__title">
                        <p>Redes Sociais</p>
                    </li>
                    <li>
                        <img width="20" height="20" src="<?= url("web/assets/img/icon/instagram.svg"); ?>" title="Instagram" alt="Nos siga no Instagram">
                        <a href="https://www.instagram.com/sotelhasmt" target="_blank" title="Instagram da Só Telhas">Instagram</a>
                    </li>

                    <li>
                        <img width="20" height="20" src="<?= url("web/assets/img/icon/facebook.svg"); ?>" title="Facebook" alt="Nos siga no Facebook">
                        <a href="https://www.facebook.com/sotelhasmt" target="_blank" title="Facebook da Só Telhas">Facebook</a>
                    </li>
                </ul>

                <ul class="footer__box__footer__payment-types">
                    <li class="footer__box__footer__contact__title">
                        <p>Formas de Pagamento</p>
                    </li>
                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/visa.svg"); ?>" title="Visa" alt="Aceitamos Visa">
                    </li>

                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/mastercard.svg"); ?>" title="Mastercard" alt="Aceitamos Mastercard">
                    </li>

                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/visa.svg"); ?>" title="Visa" alt="Aceitamos Visa">
                    </li>

                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/mastercard.svg"); ?>" title="Mastercard" alt="Aceitamos Mastercard">
                    </li>

                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/visa.svg"); ?>" title="Visa" alt="Aceitamos Visa">
                    </li>

                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/mastercard.svg"); ?>" title="Mastercard" alt="Aceitamos Mastercard">
                    </li>

                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/visa.svg"); ?>" title="Visa" alt="Aceitamos Visa">
                    </li>

                    <li>
                        <img width="60" height="35" src="<?= url("web/assets/img/icon/mastercard.svg"); ?>" title="Mastercard" alt="Aceitamos Mastercard">
                    </li>
                </ul>

            </footer>
        </div>
    </footer>


    <?php if ($sellers_whatsapp) : ?>

        <div class="whatsapp-fixed">
            <a target="_blank" data-icon-uri="<?= url("web/assets/img/icon"); ?>" href="#" title="Falar com Consultor" class="whatsapp-fixed__open-list">
                <img width="50px" height="50px" src="<?= url("web/assets/img/icon/whatsapp-fixed.svg"); ?>" alt="Tire suas Dúvidas com um Especialista">
                <p>Falar com Consultor</p>
            </a>

            <ul class="whatsapp-fixed__list-box">
                <li>
                    <div class="whatsapp-fixed__list-box__header">
                        <img src="<?= url("web/assets/img/icon/whatsapp.svg"); ?>" title="WhatsApp" alt="Entre em contato via WhatsApp">
                        <p>Com qual consultor gostaria de falar?</p>
                    </div>
                </li>

                <?php foreach ($sellers_whatsapp as $resultsellers_whatsapp) : ?>

                    <li class="whatsapp-fixed__list-box__item">
                        <a href="https://api.whatsapp.com/send/?phone=<?= whatsapp($resultsellers_whatsapp->phone); ?>&text=Olá, <?= $resultsellers_whatsapp->name; ?>! Eu estava no seu site e gostaria de tirar algumas dúvidas." title="Falar com Gessika" target="_blank" class="whatsapp-fixed__list-box__item__name">
                            <?= $resultsellers_whatsapp->name; ?>
                        </a>

                        <a href="https://api.whatsapp.com/send/?phone=<?= whatsapp($resultsellers_whatsapp->phone); ?>&text=Olá, <?= $resultsellers_whatsapp->name; ?>! Eu estava no seu site e gostaria de tirar algumas dúvidas." title="Falar com Gessika" target="_blank" class="whatsapp-fixed__list-box__item__phone">
                            <?= $resultsellers_whatsapp->phone; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="load"></div>
    <div class="alpha"></div>
    <div class="message"></div>
    <script src="<?= url("web/assets/js/scripts.js"); ?>"></script>
</body>

</html>