<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class EUI48
 *
 * [RFC7043]
 */
final class EUI48 extends Record
{
    const RR_TYPE = "EUI48";
    const RR_VALUE = 108;
   
    const MEANING = "an EUI-48 address";
}
