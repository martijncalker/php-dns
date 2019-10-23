<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class EUI64
 *
 * [RFC7043]
 */
final class EUI64 extends Record
{
    const RR_TYPE = "EUI64";
    const RR_VALUE = 109;
   
    const MEANING = "an EUI-64 address";
}
