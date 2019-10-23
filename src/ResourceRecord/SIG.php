<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class SIG
 *
 * [RFC4034][RFC3755][RFC2535][RFC2536][RFC2537][RFC2931][RFC3110][RFC3008]
 */
final class SIG extends Record
{
    const RR_TYPE = "SIG";
    const RR_VALUE = 24;
   
    const MEANING = "for security signature";
}
