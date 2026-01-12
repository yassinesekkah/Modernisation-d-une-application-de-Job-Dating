<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\core\Router;

$router = new Router();

require_once __DIR__ . '/../config/routes.php';

 $router->dispatch();
