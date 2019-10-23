<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class PTR
 *
 * [RFC1035]
 */
final class PTR extends Record
{
    const RR_TYPE = "PTR";
    const RR_VALUE = 12;
   
    const MEANING = "a domain name pointer";
}
