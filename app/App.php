<?php declare(strict_types=1);

namespace app;

use app\utils\Router;
use Throwable;

class App
{
    public function execute(string $method, string $path = ''): void
    {
        try {
            $route = Router::route($method, $path);
            $controllerName = '\app\controllers\\' . $route['controller'];
            $controller = new $controllerName();
            call_user_func_array([$controller, $route['method']], $route['params']);
        } catch (Throwable $throwable) {
            // TODO: proper error handling
            var_dump($throwable->getMessage());
        }
    }
}