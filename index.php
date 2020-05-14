<?php

require_once __DIR__."/vendor/autoload.php";


$router = new \app\Router(new \app\Request());

$router->get('/', 'home');

$router->get('/about', 'about');

$router->get('/contact','contact');

$router->get('/login','login');

$router->get('/event','event');

$router->get('/register','register');


$router->post('/contact', [\app\controllers\HomeController::class,'contact']);

$router->resolve();

