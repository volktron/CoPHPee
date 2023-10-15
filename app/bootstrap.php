<?php declare(strict_types=1);

use Cophpee\Components\App\App;

require_once __DIR__ . '/../vendor/autoload.php';

// Routing
$app = new App([
    'mode' => 'development',

    'db'     => require_once __DIR__ . '/../configs/databases.php',
    'routes' => require_once __DIR__ . '/routes/routes.php'
]);

$app->execute($_SERVER['REQUEST_METHOD'], $_GET['path'] ?? '');
