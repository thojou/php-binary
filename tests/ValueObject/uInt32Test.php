<?php

namespace Thojou\Binary\Tests\ValueObject;

use Thojou\Binary\ValueObject\uInt32;

class uInt32Test extends AbstractIntTest
{
    protected function getClassName(): string
    {
        return uInt32::class;
    }

    protected function getBinarySize(): int
    {
        return 32;
    }
}
