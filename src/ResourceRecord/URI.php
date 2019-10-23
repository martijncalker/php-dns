<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class URI
 *
 * [RFC7553]
 */
final class URI extends Record
{
    const RR_TYPE = "URI";
    const RR_VALUE = 256;
   
    const MEANING = "URI";
}
