<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class NS
 *
 * [RFC1035]
 */
final class NS extends Record
{
    const RR_TYPE = "NS";
    const RR_VALUE = 2;
   
    const MEANING = "an authoritative name server";
}
