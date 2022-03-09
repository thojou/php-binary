<?php

namespace Thojou\Binary\Tests\ValueObject;

use Thojou\Binary\ValueObject\uInt16;

class uInt16Test extends AbstractIntTest
{
    protected function getClassName(): string
    {
        return uInt16::class;
    }

    protected function getBinarySize(): int
    {
        return 16;
    }
}
