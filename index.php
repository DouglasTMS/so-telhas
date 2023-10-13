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
$route->get("/telhas", "Web:products");
$route->get("/telhas/", "Web:products");

$route->get("/telhas/{uri}", "Web:productView");
$route->get("/telhas/{uri}/", "Web:productView");


$route->get("/quem-somos", "Web:whoWeAre");
$route->get("/quem-somos/", "Web:whoWeAre");
$route->get("/orcamento", "Web:leads");
$route->get("/orcamento/", "Web:leads");
$route->get("/obrigado", "Web:success");
$route->get("/obrigado/", "Web:success");


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
