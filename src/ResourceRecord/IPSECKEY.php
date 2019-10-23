<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class IPSECKEY
 *
 * [RFC4025]
 */
final class IPSECKEY extends Record
{
    const RR_TYPE = "IPSECKEY";
    const RR_VALUE = 45;
   
    const MEANING = "IPSECKEY";
}
