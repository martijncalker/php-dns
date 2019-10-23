<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class NINFO
 *
 * [Jim_Reid]
 */
final class NINFO extends Record
{
    const RR_TYPE = "NINFO";
    const RR_VALUE = 56;
   
    const MEANING = "NINFO";
}
