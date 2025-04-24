<?php

session_start();

require_once __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$route = new Router(url(), ":");

###----------------------------------------------------------------------------------------------------###
### Web Routes ----------------------------------------------------------------------------------------###
###----------------------------------------------------------------------------------------------------###
$route->namespace("Source\Controllers");
$route->get("/", "Web:home");

## Isotérmicas
$route->get("/telhas", "Web:productRoof");
$route->get("/telhas/", "Web:productRoof");

## Isotérmicas
$route->get("/perfil", "Web:productPerfis");
$route->get("/perfil/", "Web:productPerfis");


## Isopainel
$route->get("/isopainel", "Web:productIsopainel");
$route->get("/isopainel/", "Web:productIsopainel");

$route->get("/telhas/{uri}", "Web:productView");
$route->get("/telhas/{uri}/", "Web:productView");

$route->get("/perfil/{uri}", "Web:productView");
$route->get("/perfil/{uri}/", "Web:productView");


$route->get("/quem-somos", "Web:whoWeAre");
$route->get("/quem-somos/", "Web:whoWeAre");
$route->get("/orcamento", "Web:leads");
$route->get("/orcamento/", "Web:leads");
$route->get("/obrigado", "Web:success");
$route->get("/obrigado/", "Web:success");

## PAINEL FAKE wpp
$route->get("/wpp", "Web:wpp");
$route->get("/wpp/", "Web:wpp");


$route->post("/ajax", "Web:ajax");
$route->post("/ajax/", "Web:ajax");

###
### Error Routes
###
$route->namespace("Source\Controllers")->group("ops");
$route->get("/{error_code}", "Web:error");

###
### Route
###
$route->dispatch();

###
### Error Redirect
###
if ($route->error()) {
    $route->redirect(url());
}

ob_end_flush();
