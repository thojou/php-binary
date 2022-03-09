<?php

namespace Thojou\Binary\Tests\ValueObject;

use Thojou\Binary\ValueObject\uInt8;

class uInt8Test extends AbstractIntTest
{
    protected function getClassName(): string
    {
        return uInt8::class;
    }

    protected function getBinarySize(): int
    {
        return 8;
    }
}
