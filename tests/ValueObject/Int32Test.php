<?php

namespace Thojou\Binary\Tests\ValueObject;

use Thojou\Binary\ValueObject\Int32;

class Int32Test extends AbstractIntTest
{
    protected function getClassName(): string
    {
        return Int32::class;
    }

    protected function getBinarySize(): int
    {
        return 32;
    }
}
