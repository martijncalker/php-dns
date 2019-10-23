<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class TSIG
 *
 * [RFC2845]
 */
final class TSIG extends Record
{
    const RR_TYPE = "TSIG";
    const RR_VALUE = 250;
   
    const MEANING = "Transaction Signature";
}
