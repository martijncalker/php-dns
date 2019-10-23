<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class ZONEMD
 *
 * [draft-wessels-dns-zone-digest]
 */
final class ZONEMD extends Record
{
    const RR_TYPE = "ZONEMD";
    const RR_VALUE = 63;
   
    const MEANING = "message digest for DNS zone";
}
