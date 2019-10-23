<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class HIP
 *
 * [RFC8005]
 */
final class HIP extends Record
{
    const RR_TYPE = "HIP";
    const RR_VALUE = 55;
   
    const MEANING = "Host Identity Protocol";
}
