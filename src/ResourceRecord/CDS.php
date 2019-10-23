<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class CDS
 *
 * [RFC7344]
 */
final class CDS extends Record
{
    const RR_TYPE = "CDS";
    const RR_VALUE = 59;
   
    const MEANING = "Child DS";
}
