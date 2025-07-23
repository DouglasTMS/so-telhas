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




###
### Isopainel.
### 
$route->get("/isopainel", "Web:isopainelView");
$route->get("/isopainel/", "Web:isopainelView");




###
### Cumeeireas.
### 
$route->get("/cumeeira", "Web:ridgesView");
$route->get("/cumeeira/", "Web:ridgesView");




###
### Quem somos.
### 
$route->get("/quem-somos", "Web:whoWeAre");
$route->get("/quem-somos/", "Web:whoWeAre");




###
### Orçamento.
### 
$route->get("/orcamento", "Web:leads");
$route->get("/orcamento/", "Web:leads");




###
### Obrigado
### 
$route->get("/obrigado", "Web:success");
$route->get("/obrigado/", "Web:success");




###
### PAINEL FAKE wpp
### 
$route->get("/wpp", "Web:wpp");
$route->get("/wpp/", "Web:wpp");



###
### Termoacústica
### 
$route->namespace("Source\Controllers")->group("telha-termoacustica");
$route->get("/", "Web:thermoacoustics");
$route->get("/{uri}", "Web:thermoacousticsView");




###
### Metálica
### 
$route->namespace("Source\Controllers")->group("telha-metalica");
$route->get("/{uri}", "Web:metallicView");




###
### Perfil
### 
$route->namespace("Source\Controllers")->group("perfil");
$route->get("/", "Web:perfil");
$route->get("/{uri}", "Web:perfilView");




###
### Acabamento
### 
$route->namespace("Source\Controllers")->group("acabamento");
$route->get("/", "Web:finish");
$route->get("/{uri}", "Web:finishView");




###
### Parafusos
### 
$route->namespace("Source\Controllers")->group("parafuso");
$route->get("/", "Web:screw");
$route->get("/{uri}", "Web:screwView");




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
