<?php
##
##  Configuração Geral de SEO
##
define("CONF_SITE_NAME", "Só Telhas");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_TITLE", "Só Telhas - Cobrindo o Brasil com Aço");
define("CONF_SITE_DESCRIPTION", "Só Telhas, uma empresa que trabalha com fabricação de telhas metálicas termoacústica. Fabricamos Telha com Forro Metálico, Telha Sanduiche, Telha Semi Sanduiche, Telha Simples, Telha Forro PVC, Telha Isotérmica com Film e Telha Ondulada.");
define("CONF_SITE_DOMAIN", "sotelhas.ind.br");

// Twitter
define("CONF_TWITTER_CREATOR_PROFILE", "");
define("CONF_TWITTER_COMPANY_PROFILE", "");

// Facebook
define("CONF_FACEBOOK_CREATOR_PROFILE", "douglastms");
define("CONF_FACEBOOK_COMPANY_PAGE", "");
define("CONF_FACEBOOK_APP_ID", "");
define("CONF_FACEBOOK_ADMINS", []);

##
##  Configuração de URL
##
define("CONF_URL_BASE", "https://www.sotelhas.ind.br");
define("CONF_URL_TEST", "https://www.localhost/so-telhas");

##
##  Configuração de Datas
##
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

##
##  Configuração de Views
##
define("CONF_VIEW_PATH", __DIR__ . "/../../web");
define("CONF_VIEW_EXT", "php");

##
##  Configuração de Banco de Dados
##
//define("CONF_DB_HOST", "45.151.120.4");
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "u261531561_sotelhas");
define("CONF_DB_PASS", "HX2581ODt&9");
define("CONF_DB_NAME", "u261531561_sotelhas");
define("CONF_DB_DRIVE", "mysql");
define("CONF_DB_DENIED_ACCESS_FIELDS", [
    "id",
    "created_at",
    "updated_at",
]);

##
##  Configuração de Upload
##
define("CONF_UPLOAD_PATH", "storage/uploads");
define("CONF_UPLOAD_IMAGE_PATH", "images");
define("CONF_UPLOAD_FILE_PATH", "files");
define("CONF_UPLOAD_MEDIA_PATH", "medias");
define("CONF_UPLOAD_IMAGE_CACHE_PATH", CONF_UPLOAD_PATH . "/" . CONF_UPLOAD_IMAGE_PATH . "/cache");
define("CONF_UPLOAD_MAX_IMAGE_SIZE", 2000);
define("CONF_UPLOAD_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

##
##  Configuração de E-mail
##
define("CONF_MAIL_HOST", "smtp.hostinger.com");
define("CONF_MAIL_USER", "noreply@sotelhas.ind.br");
define("CONF_MAIL", "vendas02@sotelhasmt.com");
define("CONF_MAIL_PASS", "@So#Telhas05348gR");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_SENDER", ["name" => "Só Telhas", "address" => "noreply@sotelhas.ind.br"]);
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");

##
##  Carregar o Minify se estiver em localhost
##
if ($_SERVER["SERVER_NAME"] == "localhost" || $_SERVER["SERVER_NAME"] == "www.localhost") {
    require_once __DIR__ . "/../Supports/Minify.php";
}
