<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class NSEC
 *
 * [RFC4034][RFC3755]
 */
final class NSEC extends Record
{
    const RR_TYPE = "NSEC";
    const RR_VALUE = 47;
   
    const MEANING = "NSEC";
}
