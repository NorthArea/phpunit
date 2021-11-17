<?php

namespace Test;

use App\Main;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testMain()
    {
        $main = new Main();
        self::assertTrue($main->getTrue());
    }

}
