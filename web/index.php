<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?= CONF_SITE_DESCRIPTION ?>">
    <meta name="home_path" content="<?= url(); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url('web/assets/css/style.min.251848481818.css'); ?>">
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
        })(window, document, 'script', 'dataLayer', 'GTM-PS8NWQPG');
    </script>
    <!-- End Google Tag Manager -->

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

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16777000904">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-16777000904');
    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5182123534844534"
        crossorigin="anonymous"></script>

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PS8NWQPG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="row header">
        <div class="header__box box">
            <a class="header__box__logo" href="<?= url(); ?>" title="<?= CONF_SITE_TITLE ?>">
                <img src="<?= url("web/assets/img/logo-so-telhas.svg"); ?>" alt="<?= CONF_SITE_TITLE ?>" title="<?= CONF_SITE_TITLE ?>">
            </a>

            <a target="_blank" class="header__box__whatsapp open-modal-whatsapp-conversion" data-icon-uri="<?= url("web/assets/img/icon"); ?>" href="#" title="Só Telhas no WhatsApp"><i></i><span>Peça um Orçamento</span></a>
        </div>
    </header>

    <div class="row menu">

        <ul class="menu__box box">

            <li>
                <a href="<?= url("telhas-isotermicas"); ?>" title="Telhas Isotérmicas">Telhas Isotérmicas</a>
            </li>

            <li>
                <a href="<?= url("telhas-simples"); ?>" title="Telhas Simples">Telhas Simples</a>
            </li>

            <li>
                <a href="<?= url("isopainel"); ?>" title="Isopainel">Isopainel</a>
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

    <?= $this->section("content"); ?>


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
                        <a href="https://api.whatsapp.com/send/?phone=556233000460&text=Olá! Eu estava no site e gostaria de fazer uma sugestão/reclamação." target="_blank" title="Falar com a Só Telhas">(62) 3300-0460 | <span>Sugestão/Reclamação</span></a>
                    </li>

                    <li>
                        <img width="20" height="21.82" src="<?= url("web/assets/img/icon/phone.svg"); ?>" title="Telefone" alt="Telefone">
                        <a href="tel:06233000460" target="_blank" title="Ligar para a Só Telhas" class="callFromSite">(62) 3300-0460</a>
                    </li>

                    <li>
                        <img width="20" height="15" src="<?= url("web/assets/img/icon/email.svg"); ?>" title="E-mail" alt="E-mail">
                        <a href="mailto:comercial@sotelhas.ind.br" target="_blank" title="Enviar e-mail para a Só Telhas">comercial@sotelhas.ind.br</a>
                    </li>
                </ul>

                <ul class="footer__box__footer__social">
                    <li class="footer__box__footer__contact__title">
                        <p>Redes Sociais</p>
                    </li>
                    <li>
                        <img width="20" height="20" src="<?= url("web/assets/img/icon/instagram.svg"); ?>" title="Instagram" alt="Nos siga no Instagram">
                        <a href="https://www.instagram.com/sotelhas.ind.br" target="_blank" title="Instagram da Só Telhas">Instagram</a>
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

                </ul>

            </footer>
        </div>
    </footer>


    <?php if ($sellers_whatsapp) : ?>

        <div class="whatsapp-conversion open-modal-whatsapp-conversion">
            <div class="whatsapp-conversion__icon">
                <img width="50px" height="50px" src="<?= url("web/assets/img/whatsapp-conversion/whatsapp-white-border.svg"); ?>" alt="Tire suas Dúvidas com um Especialista">
                <p>Solicitar Orçamento</p>
            </div>

            <div class="whatsapp-conversion__lead-fields">

                <header class="whatsapp-conversion__lead-fields__header">
                    <img src="<?= url("web/assets/img/whatsapp-conversion/whatsapp-white.svg"); ?>" title="WhatsApp" alt="Entre em contato via WhatsApp">
                    <p>Informe seu Nome e Telefone!</p>
                </header>

                <main class="whatsapp-conversion__lead-fields__main">

                    <form class="whatsapp-conversion__lead-fields__main__form" action="" method="POST" name="whatsapp-conversion-form">
                        <label>
                            <input type="text" name="whatsapp-conversion-name" autocomplete="off" placeholder="Qual seu nome?">
                        </label>

                        <label>
                            <input type="text" name="whatsapp-conversion-phone" class="phone_mask" autocomplete="off" placeholder="Qual seu telefone?">
                        </label>

                        <label>
                            <input type="submit" name="change-seller" value="Escolher Atendente" class="send-data-whatsapp-conversion">
                        </label>
                    </form>

                    <div class="whatsapp-conversion__lead-fields__main__message">
                        <img class="error" src="<?= url("web/assets/img/whatsapp-conversion/error.svg"); ?>" alt="Erro">
                        <p>Por favor, informe seu nome.</p>
                        <a href="#" title="Voltar">Voltar</a>
                    </div>

                    <ul class="whatsapp-conversion__lead-fields__main__sellers-list">

                        <?php foreach ($sellers_whatsapp as $resultsellers_whatsapp) : ?>
                            <li>
                                <a class="icon" href="https://api.whatsapp.com/send/?phone=<?= whatsapp($resultsellers_whatsapp->phone); ?>&text=Olá, <?= $resultsellers_whatsapp->name; ?>! Eu estava no seu site e gostaria de tirar algumas dúvidas." title="Falar com <?= $resultsellers_whatsapp->name; ?>" target="_blank">
                                    <img src="<?= url("web/assets/img/whatsapp-conversion/whatsapp-white.svg"); ?>" alt="">
                                </a>
                                <a href="https://api.whatsapp.com/send/?phone=<?= whatsapp($resultsellers_whatsapp->phone); ?>&text=Olá, <?= $resultsellers_whatsapp->name; ?>! Eu estava no seu site e gostaria de tirar algumas dúvidas." title="Falar com <?= $resultsellers_whatsapp->name; ?>" target="_blank" class="name">
                                    <?= $resultsellers_whatsapp->name; ?> <?= $resultsellers_whatsapp->last_name; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </main>
            </div>
        </div>

    <?php endif; ?>

    <div class="load"></div>
    <div class="alpha"></div>
    <div class="message"></div>
    <script src="<?= url("web/assets/js/scripts.js"); ?>"></script>
</body>

</html>