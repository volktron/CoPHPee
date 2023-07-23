<?php declare(strict_types=1);

namespace app\controllers;

class IndexController extends Controller
{
    public function default(): void
    {
        $this->json(['message' => 'hello']);
    }
}
