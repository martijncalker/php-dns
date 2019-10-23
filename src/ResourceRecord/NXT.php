<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class NXT
 *
 * [RFC3755][RFC2535]
 */
final class NXT extends Record
{
    const RR_TYPE = "NXT";
    const RR_VALUE = 30;
   
    const MEANING = "Next Domain (OBSOLETE)";
}
