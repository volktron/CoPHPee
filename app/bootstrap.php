<?php declare(strict_types=1);

use app\App;

require_once __DIR__ . '/../vendor/autoload.php';

// Routing
$app = new App([
    'db'     => require_once __DIR__ . '/../configs/databases.php',
    'routes' => require_once __DIR__ . '/routes/routes.php'
]);

$app->execute($_SERVER['REQUEST_METHOD'], $_GET['path'] ?? '');
