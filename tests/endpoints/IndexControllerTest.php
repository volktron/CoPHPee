<?php declare(strict_types=1);

namespace tests\endpoints;

use Cophpee\Tests\AppTestCase;

class IndexControllerTest extends AppTestCase
{
    public function testDefault() {
        $result = $this->get('');

        $this->assertIsArray($result);
        $this->assertIsString($result['output']);

        $this->assertEquals('hello', json_decode($result['output'])->message);
    }
}
