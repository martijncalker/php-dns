<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class MF
 *
 * [RFC1035]
 */
final class MF extends Record
{
    const RR_TYPE = "MF";
    const RR_VALUE = 4;
   
    const MEANING = "a mail forwarder (OBSOLETE - use MX)";
}
