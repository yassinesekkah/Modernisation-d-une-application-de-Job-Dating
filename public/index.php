<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\core\Router;

$router = new Router();

$router->setBasePath('/Modernisation-d%E2%80%99une-application-de-Job-Dating/public');

require_once __DIR__ . '/../config/routes.php';

 $router->dispatch();
