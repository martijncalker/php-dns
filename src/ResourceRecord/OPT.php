<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class OPT
 *
 * [RFC6891][RFC3225]
 */
final class OPT extends Record
{
    const RR_TYPE = "OPT";
    const RR_VALUE = 41;
   
    const MEANING = "OPT";
}
