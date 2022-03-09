<?php

namespace Thojou\Binary\ValueObject;

use Exception;

class uInt32 extends AbstractInt
{
    const MIN_VALUE = 0;
    const MAX_VALUE = 4294967295;
    const BIT_SIZE  = 32;
    const FORMAT    = "N";
}





