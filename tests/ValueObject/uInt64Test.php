<?php

namespace Thojou\Binary\Tests\ValueObject;

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;
use Thojou\Binary\ValueObject\uInt64;

class uInt64Test extends AbstractIntTest
{
    protected function getClassName(): string
    {
        return uInt64::class;
    }

    protected function getBinarySize(): int
    {
        return 64;
    }

    #[ArrayShape(['LOWER_MIN' => "int[]"])]
    public function provideInvalidData(): array
    {
        return [
            'LOWER_MIN' => [$this->getClassName()::MIN_VALUE - 1],
        ];
    }
}
