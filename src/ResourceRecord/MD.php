<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class MD
 *
 * [RFC1035]
 */
final class MD extends Record
{
    const RR_TYPE = "MD";
    const RR_VALUE = 3;
   
    const MEANING = "a mail destination (OBSOLETE - use MX)";
}
