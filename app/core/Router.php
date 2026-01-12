<?php

namespace App\core;

class Router
{
    private array $routes = [];

    public function get(string $path, string $action): void
    {
        $this->routes["GET"][$path] = $action;
    }

    public function post(string $path, string $action): void
    {
        $this->routes["POST"][$path] = $action;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


        $basePath = '/Modernisation-d%E2%80%99une-application-de-Job-Dating/public';
        $url = str_replace($basePath, '', $url);

        if ($url === '') {
            $url = '/';
        }

        if (!isset($this->routes[$method][$url])) {
            http_response_code(404);
            echo "404 Not Found";
            return;
        }

        [$controller, $action] = explode("@", $this->routes[$method][$url]);

        $controllerClass = 'App\\Controllers\\' . $controller;

        $controllerInstance = new $controllerClass();

        $controllerInstance->$action();
    }
}
