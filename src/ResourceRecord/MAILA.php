<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class MAILA
 *
 * [RFC1035]
 */
final class MAILA extends Record
{
    const RR_TYPE = "MAILA";
    const RR_VALUE = 254;
   
    const MEANING = "mail agent RRs (OBSOLETE - see MX)";
}
