<?php

namespace Thojou\Binary\ValueObject;

use Exception;

abstract class AbstractInt
{
    const BIT_SIZE  = self::BIT_SIZE;
    const FORMAT    = self::FORMAT;
    const MIN_VALUE = self::MIN_VALUE;
    const MAX_VALUE = self::MAX_VALUE;

    /**
     * @var int
     */
    protected int $value;

    /**
     * @param int $value
     * @throws Exception
     */
    public function __construct(int $value)
    {
        if(!$this->isValid($value)) {
            throw new Exception("Invalid value '$value'. Must be greater than " . static::MIN_VALUE. " and less than " . static::MAX_VALUE. ".");
        }
        $this->value = $value;
    }

    /**
     * @throws Exception
     */
    public static function fromBinary(string $data): static
    {
        [,$value] = unpack(static::FORMAT, $data);

        return new static($value);
    }

    public function toBinary(): string
    {
        return pack(static::FORMAT, $this->value);
    }

    public function getNative(): int
    {
        return $this->value;
    }

    public function isValid(int $value): bool
    {
        return
            $value >= static::MIN_VALUE &&
            $value <= static::MAX_VALUE;
    }

    public function getBinarySize(): int
    {
        return static::BIT_SIZE;
    }
}