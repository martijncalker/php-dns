<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class IXFR
 *
 * [RFC1995]
 */
final class IXFR extends Record
{
    const RR_TYPE = "IXFR";
    const RR_VALUE = 251;
   
    const MEANING = "incremental transfer";
}
