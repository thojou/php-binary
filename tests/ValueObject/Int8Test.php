<?php

namespace Thojou\Binary\Tests\ValueObject;

use Thojou\Binary\ValueObject\Int8;

class Int8Test extends AbstractIntTest
{
    protected function getClassName(): string
    {
        return Int8::class;
    }

    protected function getBinarySize(): int
    {
        return 8;
    }
}
