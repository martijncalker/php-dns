<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class TALINK
 *
 * [Wouter_Wijngaards]
 */
final class TALINK extends Record
{
    const RR_TYPE = "TALINK";
    const RR_VALUE = 58;
   
    const MEANING = "Trust Anchor LINK";
}
