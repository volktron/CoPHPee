<?php declare(strict_types=1);

namespace app;

class App
{
    public function execute(string $path = '') {
        try {
            $route = \app\utils\Router::route($path);
            $controllerName = '\app\controllers\\' . $route['controller'];
            $controller = new $controllerName();
            call_user_func_array([$controller, $route['method']], $route['params']);
        } catch (Throwable $throwable) {
            // TODO: proper error handling
            var_dump($throwable->getMessage());
        }
    }
}