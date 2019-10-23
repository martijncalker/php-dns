<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class HINFO
 *
 * [RFC1035]
 */
final class HINFO extends Record
{
    const RR_TYPE = "HINFO";
    const RR_VALUE = 13;
   
    const MEANING = "host information";
}
