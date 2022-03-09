<?php

namespace Thojou\Binary\ValueObject;

use Exception;

class uInt64 extends AbstractInt
{
    const MIN_VALUE = 0;
    const MAX_VALUE = 9223372036854775807;
    const BIT_SIZE  = 64;
    const FORMAT    = "J";
}





