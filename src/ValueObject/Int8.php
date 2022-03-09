<?php

namespace Thojou\Binary\ValueObject;

use Exception;

class Int8 extends AbstractInt
{
    const MIN_VALUE = 128 * -1;
    const MAX_VALUE = 127;
    const BIT_SIZE  = 8;
    const FORMAT    = "c";
}





