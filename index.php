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
