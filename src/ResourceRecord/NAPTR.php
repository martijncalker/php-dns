<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class NAPTR
 *
 * [RFC2915][RFC2168][RFC3403]
 */
final class NAPTR extends Record
{
    const RR_TYPE = "NAPTR";
    const RR_VALUE = 35;
   
    const MEANING = "Naming Authority Pointer";
}
