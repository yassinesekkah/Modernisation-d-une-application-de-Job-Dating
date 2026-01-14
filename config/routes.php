<?php 
use App\core\Router;

 /** @var Router $router */

$router->get('/', 'front\\HomeController@index');
$router->get('/test', 'Front\\TestController@form');
$router->post('/test', 'Front\\TestController@submit');

