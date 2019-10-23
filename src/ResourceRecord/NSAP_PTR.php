<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class NSAP_PTR
 *
 * [RFC1348][RFC1637][RFC1706]
 */
final class NSAP_PTR extends Record
{
    const RR_TYPE = "NSAP_PTR";
    const RR_VALUE = 23;
   
    const MEANING = "for domain name pointer, NSAP style";
}
