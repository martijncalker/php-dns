<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class PX
 *
 * [RFC2163]
 */
final class PX extends Record
{
    const RR_TYPE = "PX";
    const RR_VALUE = 26;
   
    const MEANING = "X.400 mail mapping information";
}
