<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class DHCID
 *
 * [RFC4701]
 */
final class DHCID extends Record
{
    const RR_TYPE = "DHCID";
    const RR_VALUE = 49;
   
    const MEANING = "DHCID";
}
