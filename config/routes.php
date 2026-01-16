<?php 
use App\core\Router;

 /** @var Router $router */

$router->get('/', 'Front\\HomeController@index');
$router->get('/test', 'Front\\TestController@form');
$router->post('/test', 'Front\\TestController@submit');
$router->post('/users/store', 'Front\\HomeController@store');
$router->post('/users/update', 'Front\\HomeController@update');
$router->post('/users/delete', 'Front\\HomeController@delete');



