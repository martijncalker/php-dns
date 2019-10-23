<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class DNSKEY
 *
 * [RFC4034][RFC3755]
 */
final class DNSKEY extends Record
{
    const RR_TYPE = "DNSKEY";
    const RR_VALUE = 48;
   
    const MEANING = "DNSKEY";
}
