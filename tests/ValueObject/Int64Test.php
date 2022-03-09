<?php

namespace Thojou\Binary\Tests\ValueObject;

use Thojou\Binary\ValueObject\Int64;

class Int64Test extends AbstractIntTest
{
    protected function getClassName(): string
    {
        return Int64::class;
    }

    protected function getBinarySize(): int
    {
        return 64;
    }

    public function provideInvalidData(): array
    {
        return [];
    }
}
