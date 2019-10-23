<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class A
 *
 * [RFC1035]
 */
final class A extends Record
{
    const RR_TYPE = "A";
    const RR_VALUE = 1;
   
    const MEANING = "a host address";
}
