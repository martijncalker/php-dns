<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class NSEC3
 *
 * [RFC5155]
 */
final class NSEC3 extends Record
{
    const RR_TYPE = "NSEC3";
    const RR_VALUE = 50;
   
    const MEANING = "NSEC3";
}
