<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class SOA
 *
 * [RFC1035]
 */
final class SOA extends Record
{
    const RR_TYPE = "SOA";
    const RR_VALUE = 6;
   
    const MEANING = "marks the start of a zone of authority";
}
