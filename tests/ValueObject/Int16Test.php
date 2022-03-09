<?php

namespace Thojou\Binary\Tests\ValueObject;

use Thojou\Binary\ValueObject\Int16;

class Int16Test extends AbstractIntTest
{
    protected function getClassName(): string
    {
        return Int16::class;
    }

    protected function getBinarySize(): int
    {
        return 16;
    }
}
