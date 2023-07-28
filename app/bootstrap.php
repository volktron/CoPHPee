<?php declare(strict_types=1);

use app\App;

require_once __DIR__ . '/../vendor/autoload.php';

// Routing
$app = new App();
$app->execute($_SERVER['REQUEST_METHOD'], $_GET['path'] ?? '');
