<?php declare(strict_types=1);

use app\App;

require __DIR__ . '/../vendor/autoload.php';

// Routing
$app = new App();
$app->execute($_SERVER['REQUEST_METHOD'], $_GET['path']);
