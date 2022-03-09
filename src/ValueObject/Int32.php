<?php

namespace Thojou\Binary\ValueObject;

use Exception;

class Int32 extends AbstractInt
{
    const MIN_VALUE = 2147483648 * -1;
    const MAX_VALUE = 2147483647;
    const BIT_SIZE  = 32;
    const FORMAT    = "l";
}





