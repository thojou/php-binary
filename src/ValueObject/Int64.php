<?php

namespace Thojou\Binary\ValueObject;

use Exception;

class Int64 extends AbstractInt
{
    const MIN_VALUE = 9223372036854775808 * -1;
    const MAX_VALUE = 9223372036854775807;
    const BIT_SIZE  = 64;
    const FORMAT    = "q";
}





