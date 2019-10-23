<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class CAA
 *
 * [RFC-ietf-lamps-rfc6844bis-07]
 */
final class CAA extends Record
{
    const RR_TYPE = "CAA";
    const RR_VALUE = 257;
   
    const MEANING = "Certification Authority Restriction";
}
