<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use Controllers\PagesController;
use MVC\Router;
$router = new Router();

// PUBLIC
$router->get('/',[PagesController::class, 'index']);


// ACCOUNT
$router->get('/login',[LoginController::class, 'login']);
$router->post('/login',[LoginController::class, 'login']);
$router->get('/forgot',[LoginController::class, 'forgot']);
$router->post('/forgot',[LoginController::class, 'forgot']);
$router->get('/join',[LoginController::class, 'join']);
$router->post('/join',[LoginController::class, 'join']);
$router->get('/mensaje', [LoginController::class, 'mensaje']);
$router->get('/logout', [LoginController::class, 'logout']);
$router->get('/confirmar', [LoginController::class, 'confirmar']);
$router->get('/reset', [LoginController::class, 'reset']);
$router->post('/reset', [LoginController::class, 'reset']);





$router->comprobarRutas();
