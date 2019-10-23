<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class APL
 *
 * [RFC3123]
 */
final class APL extends Record
{
    const RR_TYPE = "APL";
    const RR_VALUE = 42;
   
    const MEANING = "APL";
}
