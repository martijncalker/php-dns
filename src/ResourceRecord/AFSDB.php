<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class AFSDB
 *
 * [RFC1183][RFC5864]
 */
final class AFSDB extends Record
{
    const RR_TYPE = "AFSDB";
    const RR_VALUE = 18;
   
    const MEANING = "for AFS Data Base location";
}
