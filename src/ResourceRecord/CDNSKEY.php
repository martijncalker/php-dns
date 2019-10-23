<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class CDNSKEY
 *
 * [RFC7344]
 */
final class CDNSKEY extends Record
{
    const RR_TYPE = "CDNSKEY";
    const RR_VALUE = 60;
   
    const MEANING = "DNSKEY(s) the Child wants reflected in DS";
}
