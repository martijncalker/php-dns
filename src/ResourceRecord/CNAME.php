<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class CNAME
 *
 * [RFC1035]
 */
final class CNAME extends Record
{
    const RR_TYPE = "CNAME";
    const RR_VALUE = 5;
   
    const MEANING = "the canonical name for an alias";
}
