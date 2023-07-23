<?php declare(strict_types=1);

namespace app\controllers;

class TestController extends Controller
{
    public function subtest($thing, $subthing): void
    {
        $this->json([
            'message' => 'subtest',
            '$thing' => $thing,
            '$subthing' => $subthing
        ]);
    }
}
