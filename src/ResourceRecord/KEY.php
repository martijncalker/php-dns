<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class KEY
 *
 * [RFC4034][RFC3755][RFC2535][RFC2536][RFC2537][RFC2539][RFC3008][RFC3110]
 */
final class KEY extends Record
{
    const RR_TYPE = "KEY";
    const RR_VALUE = 25;
   
    const MEANING = "for security key";
}
