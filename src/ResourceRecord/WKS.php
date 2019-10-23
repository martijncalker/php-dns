<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class WKS
 *
 * [RFC1035]
 */
final class WKS extends Record
{
    const RR_TYPE = "WKS";
    const RR_VALUE = 11;
   
    const MEANING = "a well known service description";
}
