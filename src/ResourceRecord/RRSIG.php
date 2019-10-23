<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class RRSIG
 *
 * [RFC4034][RFC3755]
 */
final class RRSIG extends Record
{
    const RR_TYPE = "RRSIG";
    const RR_VALUE = 46;
   
    const MEANING = "RRSIG";
}
