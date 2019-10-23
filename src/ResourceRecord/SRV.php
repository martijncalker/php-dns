<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class SRV
 *
 * [1][RFC2782]
 */
final class SRV extends Record
{
    const RR_TYPE = "SRV";
    const RR_VALUE = 33;
   
    const MEANING = "Server Selection";
}
