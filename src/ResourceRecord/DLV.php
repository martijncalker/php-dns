<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class DLV
 *
 * [RFC4431]
 */
final class DLV extends Record
{
    const RR_TYPE = "DLV";
    const RR_VALUE = 32769;
   
    const MEANING = "DNSSEC Lookaside Validation";
}
