<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class TKEY
 *
 * [RFC2930]
 */
final class TKEY extends Record
{
    const RR_TYPE = "TKEY";
    const RR_VALUE = 249;
   
    const MEANING = "Transaction Key";
}
