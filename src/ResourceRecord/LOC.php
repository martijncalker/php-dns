<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class LOC
 *
 * [RFC1876]
 */
final class LOC extends Record
{
    const RR_TYPE = "LOC";
    const RR_VALUE = 29;
   
    const MEANING = "Location Information";
}
