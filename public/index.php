<?php
session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Core\Model;

$pdo = new \PDO(
    "mysql:host=localhost;dbname=job_dating;charset=utf8",
    "root",
    ""
);

$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

Model::setDatabase($pdo);

$router = new Router();

require_once __DIR__ . '/../config/routes.php';

 $router->dispatch();

 //////php -S localhost::8080