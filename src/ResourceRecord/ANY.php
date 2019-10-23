<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class ANY
 *
 * [RFC1035][RFC6895][RFC8482]
 */
final class ANY extends Record
{
    const RR_TYPE = "ANY";
    const RR_VALUE = 255;
   
    const MEANING = "A request for some or all records the server has available";
}
