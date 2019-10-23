<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class AXFR
 *
 * [RFC1035][RFC5936]
 */
final class AXFR extends Record
{
    const RR_TYPE = "AXFR";
    const RR_VALUE = 252;
   
    const MEANING = "transfer of an entire zone";
}
