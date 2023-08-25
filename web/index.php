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

    <?= $v->section("content"); ?>


    <a target="_blank" href="https://api.whatsapp.com/send/?phone=5565996823535&text=Olá! Eu estava no seu site e gostaria de tirar algumas dúvidas." title="Falar com Consultor" class="whatsapp-fixed"><img width="50px" height="50px" src="<?= url("web/assets/icon/whatsapp-fixed.svg"); ?>" alt="Falar com Consultor">
        <p>Falar com Consultor</p>
    </a>

    <div class="load"></div>
    <div class="alpha"></div>
    <div class="message"></div>
    <script src="<?= url("web/assets/js/scripts.js"); ?>"></script>
</body>

</html>