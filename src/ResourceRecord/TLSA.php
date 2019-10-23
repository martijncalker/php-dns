<?php

declare(strict_types=1);

namespace vanCalker\DNS\ResourceRecord;

/**
 * Class TLSA
 *
 * [RFC6698]
 */
final class TLSA extends Record
{
    const RR_TYPE = "TLSA";
    const RR_VALUE = 52;
   
    const MEANING = "TLSA";
}
