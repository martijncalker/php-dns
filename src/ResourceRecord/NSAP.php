<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class NSAP
 *
 * [RFC1706]
 */
final class NSAP extends Record
{
    const RR_TYPE = "NSAP";
    const RR_VALUE = 22;
   
    const MEANING = "for NSAP address, NSAP style A record";
}
