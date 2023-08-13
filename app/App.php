<?php declare(strict_types=1);

namespace app;

use Cophpee\Components\Facade\DB;
use Cophpee\Components\Router\Router;
use Throwable;

class App
{
    public function __construct()
    {
        // Handle request data. GET and POST requests already get handled by PHP
        if($_SERVER['REQUEST_METHOD'] !== 'GET' && $_SERVER['REQUEST_METHOD'] !== 'POST') {
            $_REQUEST = file_get_contents("php://input");
        }

        // Initialize things.
        DB::init(require_once __DIR__ . '/../configs/databases.php');
    }

    public function execute(string $method, string $path = ''): void
    {
        try {
            $routes = require_once __DIR__ . '/routes/routes.php';
            $route = (new Router($routes))->route($method, $path);
            $controllerName = '\app\controllers\\' . $route['controller'];
            $controller = new $controllerName();
            call_user_func_array([$controller, $route['method']], $route['params']);
        } catch (Throwable $throwable) {
            // TODO: proper error handling
            echo '<pre>';
            var_dump($throwable->getMessage());
            var_dump(debug_backtrace());
            echo '</pre>';
        }
    }
}
