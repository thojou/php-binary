<?php

namespace Thojou\Binary\ValueObject;

use Exception;

class Int16 extends AbstractInt
{
    const MIN_VALUE = 32768 * -1;
    const MAX_VALUE = 32767;
    const BIT_SIZE  = 16;
    const FORMAT    = "s";
}





