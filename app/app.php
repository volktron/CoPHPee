<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

// Initialize Session, DB, etc.

// Routing
try {
    $route = \app\utils\Router::route($_GET['path'] ?? '');
    $controllerName = '\app\controllers\\' . $route['controller'];
    $controller = new $controllerName();
    call_user_func_array([$controller, $route['method']], $route['params']);
} catch (Throwable $throwable) {
    // TODO: proper error handling
    var_dump($throwable->getMessage());
}

// Fallback