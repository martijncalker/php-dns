<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class LP
 *
 * [RFC6742]
 */
final class LP extends Record
{
    const RR_TYPE = "LP";
    const RR_VALUE = 107;
   
    const MEANING = "";
}
