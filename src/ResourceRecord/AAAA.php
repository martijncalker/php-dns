<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class AAAA
 *
 * [RFC3596]
 */
final class AAAA extends Record
{
    const RR_TYPE = "AAAA";
    const RR_VALUE = 28;
   
    const MEANING = "IP6 Address";
}
