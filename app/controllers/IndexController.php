<?php declare(strict_types=1);

namespace app\controllers;

use Cophpee\Components\Controller\Controller;

class IndexController extends Controller
{
    public function default(): void
    {
        $this->json(['message' => 'hello']);
    }
}
