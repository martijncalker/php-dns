<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class TXT
 *
 * [RFC1035]
 */
final class TXT extends Record
{
    const RR_TYPE = "TXT";
    const RR_VALUE = 16;
   
    const MEANING = "text strings";
}
