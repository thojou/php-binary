<?php

namespace Thojou\Binary\Tests\ValueObject;

use Exception;
use JetBrains\PhpStorm\ArrayShape;
use Thojou\Binary\ValueObject\uInt8;
use PHPUnit\Framework\TestCase;

abstract class AbstractIntTest extends TestCase
{

    /**
     * @dataProvider provideValidData
     * @param $value
     * @throws Exception
     */
    public function testValidValues($value)
    {
        $className = $this->getClassName();
        $binaryInt = new $className($value);

        $this->assertEquals($value, $binaryInt->getNative());
        $this->assertIsInt($binaryInt->getNative());
    }

    /**
     * @dataProvider provideInvalidData
     * @param $value
     */
    public function testInvalidValues($value)
    {
        $this->expectException(Exception::class);

        $className = $this->getClassName();
        new $className($value);
    }

    public function testToBinary()
    {
        $value     = $this->getAvg();
        $className = $this->getClassName();
        $binaryInt = new $className($value);

        $this->assertEquals(pack($className::FORMAT, $value), $binaryInt->toBinary());
    }

    public function testFromBinary()
    {
        $value     = $this->getAvg();
        $className = $this->getClassName();
        $binaryInt = $className::fromBinary(pack($className::FORMAT, $value));

        $this->assertEquals($value, $binaryInt->getNative());
    }

    public function testBinarySize()
    {
        $className = $this->getClassName();
        $binaryInt = new $className($this->getAvg());

        $this->assertEquals($this->getBinarySize(), $binaryInt->getBinarySize());

    }

    #[ArrayShape(['MIN' => "int[]", 'AVG' => "int[]", 'MAX' => "int[]"])]
    public function provideValidData(): array
    {
        return [
            'MIN' => [$this->getClassName()::MIN_VALUE],
            'AVG' => [$this->getAvg()],
            'MAX' => [$this->getClassName()::MAX_VALUE]
        ];
    }

    #[ArrayShape(['LOWER_MIN' => "int[]", 'GREATER_MAX' => "int[]"])]
    public function provideInvalidData(): array
    {
        return [
            'LOWER_MIN' => [$this->getClassName()::MIN_VALUE - 1],
            'GREATER_MAX' => [$this->getClassName()::MAX_VALUE + 1]
        ];
    }

    private function getAvg(): int
    {
        return (int)(($this->getClassName()::MIN_VALUE + $this->getClassName()::MAX_VALUE) / 2);
    }

    abstract protected function getClassName(): string;

    abstract protected function getBinarySize(): int;
}
