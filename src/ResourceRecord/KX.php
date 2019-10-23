<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class KX
 *
 * [RFC2230]
 */
final class KX extends Record
{
    const RR_TYPE = "KX";
    const RR_VALUE = 36;
   
    const MEANING = "Key Exchanger";
}
