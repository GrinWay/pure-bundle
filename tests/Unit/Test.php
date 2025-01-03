<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
class Test extends AbstractUnitTestCase
{
    public function testWorking()
    {
        $this->assertSame(0, 0);
    }
}
