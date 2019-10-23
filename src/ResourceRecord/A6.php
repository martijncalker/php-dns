<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class A6
 *
 * [RFC3226][RFC2874][RFC6563]
 */
final class A6 extends Record
{
    const RR_TYPE = "A6";
    const RR_VALUE = 38;
   
    const MEANING = "A6 (OBSOLETE - use AAAA)";
}
